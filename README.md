# Solr with Integernet-Solr container for Magento 2

A Docker container with Integernet-Solr and OpenJDK 8 on top of openjdk:8-jre-alpine

# Varnish Docker container

> Alpine 3.6

> OpenJDK 8

> Solr 6.6

> IntegerNet Solr 1.4.2

## Usage

```
docker run -d \
  --volume solrintergenet:/usr/local/solr/solr-6.6.0/server/solr/data
  --name cs2solrintegernet \
  -p 8983:8983 \
  cs2ag/solrintegernet
```

### Volumes

Use a named volume or mount a host directory for persistent solr data.

## Exposing ports

The following ports can be exposed in order to use Solrbridge on container host:

> **8983** `Solr port`


## Author

* Stefan Preissner (<github@cs2.ch>)  

---
