DOCKER := docker

IMAGE = $(file < docker/IMAGE)
TAG = $(IMAGE):$(file < docker/VERSION)

REGISTRY_URL = aatf

all: build upload

build:
	$(DOCKER) build --file docker/Dockerfile --tag $(TAG) .

upload:
	$(DOCKER) tag $(TAG) $(REGISTRY_URL)/$(TAG)
	$(DOCKER) push $(REGISTRY_URL)/$(TAG)

run: build
	$(DOCKER) run -p 60000:8080 -it --entrypoint /bin/bash $(TAG)

test: run
