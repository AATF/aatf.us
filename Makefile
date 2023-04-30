IMAGE = $(file < IMAGE)
TAG = $(IMAGE):$(file < VERSION)

REGISTRY_URL = public.ecr.aws/e3k2e0k8

all: build upload

build:
	docker build --tag $(TAG) .

upload:
	docker tag $(TAG) $(REGISTRY_URL)/$(TAG)
	aws --profile aatf ecr-public get-login-password --region us-east-1 | docker login --username AWS --password-stdin $(REGISTRY_URL)
	docker push $(REGISTRY_URL)/$(TAG)

run: build
	docker run -it $(TAG)
