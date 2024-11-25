pipeline {
    agent any  // This means the pipeline can run on any available agent

    stages {
        stage('Checkout') {
            steps {
                // Checkout the code from GitHub repository
                git 'https://github.com/DHIVYASRI-D/Jenkins-CI-CD.git'
            }
        }

        stage('Build') {
            steps {
                // Placeholder for build commands (e.g., compile, package, etc.)
                echo 'Building the project...'
            }
        }

        stage('Test') {
            steps {
                // Placeholder for test commands (e.g., unit tests)
                echo 'Running tests...'
            }
        }

        stage('Deploy') {
            steps {
                // Placeholder for deploy commands (e.g., deploy to staging/production)
                echo 'Deploying the application...'
            }
        }
    }
}
