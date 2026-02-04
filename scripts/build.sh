#!/bin/bash
set -e

echo "🚀 Building Colegio Bryce for production..."

# Install PHP dependencies
echo "📦 Installing PHP dependencies..."
composer install --no-dev --optimize-autoloader

# Install and build frontend assets
echo "🎨 Building Tailwind CSS..."
npm install
npm run build

# Create necessary directories
echo "📁 Creating writable directories..."
mkdir -p writable/cache
mkdir -p writable/logs
mkdir -p writable/session
mkdir -p writable/uploads

# Set permissions
chmod -R 755 writable

echo "✅ Build complete!"
