# RPi1 - Sensor IDS (Suricata)

## Hardware
- Raspberry Pi 4
- Ubuntu Server 24.04 LTS

## Software Instalado

| Programa | Versión | Función |
|----------|---------|---------|
| Suricata | Stable (PPA) | IDS/IPS - Análisis de tráfico de red |
| net-tools | Última | Herramientas de red (ifconfig, netstat) |
| curl | Última | Transferencia de datos |
| wget | Última | Descarga de archivos |
| git | Última | Control de versiones |
| build-essential | Última | Herramientas de compilación |

## Configuración Actual
- **IP actual:** (pendiente de asignar)
- **IP final:** 192.168.20.20 (VLAN 20 - MIRROR)
- **Interfaz monitorizada:** eth0
- **Modo:** IDS (solo detección, no bloquea)

## Servicios Activos
- Suricata (escuchando en eth0)

## Logs Generados
- `/var/log/suricata/eve.json` (formato JSON para ELK)

## Estado
Completado