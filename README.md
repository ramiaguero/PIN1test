Overview

The Jenkins pipeline defined in the Jenkinsfile performs the following tasks:

    Building Docker Image: Builds a Docker image for the web application.
    Running Tests: Executes tests for the web application within the Docker container.
    Deploying Image: Tags the Docker image and pushes it to Docker Hub.

Pipeline Structure

The Jenkins pipeline is structured into several stages:

    Building Image: This stage builds a Docker image for the web application using the Dockerfile provided in the repository.
    Run Tests: This stage runs tests for the web application using npm.
    Deploy Image: This stage deploys the Docker image to Docker Hub after a successful build and test run.

Prerequisites

Before running the pipeline, ensure the following prerequisites are met:

    Jenkins is installed and configured.
    Docker is installed on the Jenkins agent.
    Docker Hub credentials are configured in Jenkins credentials with the ID dockerhub-credentials.

Pipeline Configuration

The pipeline is configured with the following environment variables:

    DOCKERHUB_CREDENTIALS: Jenkins credentials ID for Docker Hub authentication.
    DOCKER_IMAGE: Docker image name and tag.
    ARTIFACT_ID: Identifier for the artifact (Docker image).

Pipeline Options

The pipeline defines a timeout of 2 minutes for each stage.
Usage

To use this Jenkins pipeline:

    Create a new pipeline job in Jenkins.
    Link the job to this repository.
    Configure Docker Hub credentials in Jenkins with the ID dockerhub-credentials.
    Run the pipeline.
