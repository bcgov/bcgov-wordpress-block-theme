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
    navbar: [
      {
        text: 'Home',
        link: '/',
      },
    ],
    sidebar: [
      // SidebarItem
      {
        collapsable:true,
        children: [
          "/wp-creating-pages.md",
          "/html-editor.md",
        ]
      },
      // string - page file path
    ],
  }),
});
