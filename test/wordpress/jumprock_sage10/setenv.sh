#!/usr/bin/env bash 
export $(grep -E '^#!|^[^#]' .env | xargs)