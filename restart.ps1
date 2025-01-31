Write-Host "Arrêt des conteneurs existants..."
docker-compose down

Write-Host "Reconstruction et redémarrage des conteneurs..."
docker-compose up --build -d

Write-Host "Opération terminée."