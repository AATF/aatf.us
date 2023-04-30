IMAGE = $(file < IMAGE)
TAG = $(IMAGE):$(file < VERSION)

all: build upload

build:
	docker build --tag $(TAG) .

upload:
	docker tag $(TAG) 843020956985.dkr.ecr.us-west-2.amazonaws.com/$(TAG)
	aws --profile waf ecr get-login-password --region us-west-2 | docker login --username AWS --password-stdin 843020956985.dkr.ecr.us-west-2.amazonaws.com
	docker push 843020956985.dkr.ecr.us-west-2.amazonaws.com/$(TAG)
