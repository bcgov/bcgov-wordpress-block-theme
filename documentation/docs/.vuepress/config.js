import { defaultTheme } from "@vuepress/theme-default";
import { defineUserConfig } from "vuepress";

export default defineUserConfig({
  base: "/documentation/",
  lang: "en-US",
  title: "Documentation",
  description: "Developer Documentation",
  theme: defaultTheme({
    logo: "/images/BCID_H_rgb_pos.png",
    // sidebar array
    // all pages will use the same sidebar
    sidebar: [
      // SidebarItem

      // string - page file path
    ],
  }),
});