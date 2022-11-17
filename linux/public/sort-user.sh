#!/bin/bash

awk '{if (NR!=1) {print $3}}' table.txt | uniq -c | sort -rk1  | awk '{print $0}'

