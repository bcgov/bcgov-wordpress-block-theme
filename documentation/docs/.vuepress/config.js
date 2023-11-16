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
      {
        text: "BCGov Block Theme",
        collapsible: true,
        children: [
          "/Using-BCGov-Block-Theme.md",
        ]
      }, 
      // string - page file path
    ],
  }),
});