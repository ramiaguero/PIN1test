pipeline {
    agent any

    environment {
        DOCKERHUB_CREDENTIALS = credentials('dockerhub-credentials')
        DOCKER_IMAGE = 'ramiroaguero/pin1v2:latest'
        ARTIFACT_ID = "elbuo8/webapp:${env.BUILD_NUMBER}"
    }

    options {
        timeout(time: 2, unit: 'MINUTES')
    }

    stages {
        stage('Building image') {
            steps {
                sh '''
                docker build -t testapp .
                '''
            }
        }

        stage('Run tests') {
            steps {
                sh "docker run testapp npm test"
            }
        }

        stage('Deploy Image') {
            steps {
                withCredentials([usernamePassword(credentialsId: 'dockerhub-credentials', passwordVariable: 'DOCKERHUB_PASSWORD', usernameVariable: 'DOCKERHUB_USERNAME')]) {
                    sh '''
                    echo "$DOCKERHUB_PASSWORD" | docker login -u "$DOCKERHUB_USERNAME" --password-stdin
                    docker tag testapp $DOCKER_IMAGE
                    docker push $DOCKER_IMAGE
                    '''
                }
            }
        }
    }
}