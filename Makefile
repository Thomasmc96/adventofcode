run-and-build: build run

run:
	docker run -it -v "$(shell pwd)/code:/var/php-code-challenge" php-code-challenge

build:
	docker build --tag php-code-challenge .

clean:
	git clean -fxd -e .idea
