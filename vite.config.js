import { defineConfig } from 'vite'
import php from 'vite-plugin-php'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  root: 'resources',
  publicDir: 'public',
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
    php({
      reload: ['../resources/Views/**/*.php'],
    }),
    tailwindcss(),
  ],
  watch: {
    ignored: ['!**/resources/**'],
    include: ['resources/**/*']
  },
  build: {
    manifest: true,
    outDir: 'build',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        main: 'resources/assets/js/main.js'
      }
    }
  }
})
