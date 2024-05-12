DOCKER := docker

IMAGE = $(file < IMAGE)
TAG = $(IMAGE):$(file < VERSION)

REGISTRY_URL = aatf/aatf.us

all: build upload

build:
	$(DOCKER) build --tag $(TAG) .

upload:
	$(DOCKER) tag $(TAG) $(REGISTRY_URL):$(TAG)
	$(DOCKER) push $(REGISTRY_URL):$(TAG)

run: build
	$(DOCKER) run -p 60000:80 -it --entrypoint /bin/bash $(TAG)

test: run
