#!/usr/bin/bash
#
# Script to build and deploy the ACS site to the docs/ folder
#

# Build CSS
cd ./design
npx gulp compile
cp -r -p ./assets ../grubby-galaxy/public/.

# Build Astro pages
cd ../grubby-galaxy
npm run build
cd ..

# Clear old and copy Astro dist to docs/
rm -rf docs/*
cp -r -p ./grubby-galaxy/dist/* ./docs/
cp -r -p ./CNAME ./docs/.