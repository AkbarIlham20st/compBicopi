pipeline {
    agent any

    environment {
        DOCKER_IMAGE = 'laravel-app'
        DOCKER_TAG = 'latest'
    }

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/AkbarIlham20st/compBicopi.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    docker.build("${DOCKER_IMAGE}:${DOCKER_TAG}")
                }
            }
        }

        stage('Run Container') {
            steps {
                script {
                    sh 'docker run -d -p 8000:9000 --name laravel_app laravel-app:latest'
                }
            }
        }
    }
}
