import { defaultTheme } from "@vuepress/theme-default";
import { defineUserConfig } from "vuepress";

export default defineUserConfig({
  base: "/bcgov-wordpress-block-theme/",
  lang: "en-US",
  title: "Documentation",
  description: "Developer Documentation",
  theme: defaultTheme({
    // sidebar array
    // all pages will use the same sidebar
    sidebar: [
      // SidebarItem

      // string - page file path
    ],
  }),
});