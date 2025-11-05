import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";
import { fileURLToPath, URL } from "node:url";

export default defineConfig({
	base: "",
	build: {
		outDir: "assets",
		emptyOutDir: true,
		rollupOptions: {
			input: {
				main: fileURLToPath(new URL("./src/js/main.js", import.meta.url)),
			},
			output: {
				entryFileNames: "js/[name].js",
				assetFileNames: (assetInfo) => {
					if (assetInfo.name?.endsWith(".css")) return "css/style.css";
					return "img/[name][extname]";
				},
			},
		},
	},
	plugins: [tailwindcss()],
});
