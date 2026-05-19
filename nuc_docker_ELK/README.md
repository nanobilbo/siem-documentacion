# NUC - Servidor SIEM (Proxmox + ELK Stack)

## Hardware
- Intel NUC
- Proxmox VE 8.x

## Software Instalado

### Host (Proxmox)
- Proxmox VE 8.x

### VM Ubuntu Server (siem-elk)
- Ubuntu Server 22.04 LTS
- Docker Engine
- Docker Compose Plugin
- ELK Stack (contenedores Docker)

## ELK Stack - Contenedores

| Contenedor | Versión | Puerto | Función |
|------------|---------|--------|---------|
| Elasticsearch | 8.13.0 | 9200 | Almacenamiento y búsqueda de logs |
| Logstash | 8.13.0 | 5000 (TCP) | Recepción y procesamiento de logs |
| Kibana | 8.13.0 | 5601 | Visualización y dashboards |

## Configuración Actual

| Componente | IP Actual | IP Final (VLAN 10) |
|------------|-----------|---------------------|
| Proxmox Host | 192.168.1.xx | 192.168.10.10 |
| VM Ubuntu (ELK) | 192.168.1.100 | 192.168.10.100 |

## Accesos

- **Proxmox:** `https://192.168.1.131:8006`
- **Kibana:** `http://192.168.1.100:5601`
- **Elasticsearch API:** `http://192.168.1.100:9200`

## Volúmenes Persistentes

- `elk_elasticsearch-data` - Datos de Elasticsearch

## Estado
Completado