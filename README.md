# Qedit-Website

## Getting Started
1. Install Docker v17+ (and Docker-Compose v1.1+)
2. Clone repository
3. Set file premissions if necessary  
`sudo chmod -R 777 wordpress/wp-content/uploads`  
`sudo chmod -R 777 data`
4. run `docker-compose up`

## Enter Server Container
`npm run ssh:server`

## Backup & Restore DB
SQL File: `data/db.sql`  
### Backup
`npm run db:backup`


### Restore
`npm run db:restore`  
* Backup file should be restored upon container start  


