import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  root: 'resources',
  publicDir: '../public',
  server: {
    port: 5173,
    strictPort: true,
    open: true,
    cors: true,
    headers: {
        'Access-Control-Allow-Origin': '*',
        'Access-Control-Allow-Methods': 'GET,POST,PUT,DELETE,OPTIONS',
        'Access-Control-Allow-Headers': 'Content-Type, Authorization',
      },
  },
  plugins: [
    tailwindcss(),
  ],
  build: {
    manifest: true,
    outDir: '../build',
    emptyOutDir: false,
    rollupOptions: {
      input: {
        main: 'resources/assets/js/main.js',
        home: 'resources/assets/js/home.ts'
      }
    }
  }
})
