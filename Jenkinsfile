pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                // Clone the repository from GitHub
                git branch: 'main', url: 'https://github.com/DHIVYASRI-D/Jenkins-CI-CD.git'
            }
        }

        stage('Check HTML Syntax') {
            steps {
                // Install HTMLHint and check syntax of index.html
                sh '''
                npm install -g htmlhint
                htmlhint index.html
                '''
            }
        }

        stage('Check CSS Syntax') {
            steps {
                // Install Stylelint and check syntax of style.css
                sh '''
                npm install -g stylelint
                stylelint style.css
                '''
            }
        }

        stage('Run Tests') {
            steps {
                // This stage is a placeholder for any tests you want to run
                echo 'Running tests... (No tests configured yet)'
            }
        }

        stage('Build') {
            steps {
                // This is a placeholder stage for building your project (currently a simple echo)
                echo 'Build successful! Your static files are ready.'
            }
        }
    }
}
