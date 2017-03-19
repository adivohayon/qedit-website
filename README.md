# Qedit-Website

## Getting Started
1. Install Docker v17+ (and Docker-Compose v1.1+)
2. Clone repository
3. Set file premissions if necessary `sudo chmod -R 777 wordpress`
4. run 	`docker-compose up`
5. 


## Backup & Restore DB
### Backup
`docker exec mysql /usr/bin/mysqldump -u wordpress --password=wordpress wordpress > backups/db.sql`


### Restore
`cat backups/db.sql | docker exec -i mysql /usr/bin/mysql -u wordpress --password=wordpress wordpress`