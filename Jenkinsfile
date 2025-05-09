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
                    // Membuat Docker image
                    docker.build("${DOCKER_IMAGE}:${DOCKER_TAG}")
                }
            }
        }

        stage('Run Container') {
            steps {
                script {
                    // Menjalankan container
                    sh 'docker run -d -p 8000:9000 --name laravel_app laravel-app:latest'
                }
            }
        }
    }

    post {
        always {
            // Menghentikan dan menghapus container jika pipeline selesai
            sh 'docker rm -f laravel_app || true'
        }
    }
}
