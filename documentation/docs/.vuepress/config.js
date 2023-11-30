import { defaultTheme } from "@vuepress/theme-default";
import { defineUserConfig } from "vuepress";
import { searchPlugin } from "@vuepress/plugin-search";
import { mdEnhancePlugin } from "vuepress-plugin-md-enhance";

export default defineUserConfig({
  base: "/bcgov-wordpress-block-theme/",
  lang: "en-US",
  title: "BCGov Block Theme",
  description: "BCGov Block Theme Documentation",
  theme: defaultTheme({
    editLink: false,
    lastUpdated: true,
    repo: 'https://github.com/bcgov/bcgov-wordpress-block-theme',
    repoLabel: 'Github',
    navbar: [
      {
        text: 'Home',
        link: '/',
      },
      {
        text: 'Templates',
        link: '/guide/content/wp-templates.md',
      },
      {
        text: 'Settings',
        children: [
          '/guide/setting/Using-BCGov-Block-Theme.md',
          '/guide/setting/Content-Security-Policy.md',
          '/guide/setting/Notice-Banner.md'
        ]
      },
      {
        text: 'Content',
        children: [
          '/guide/content/Block-Patterns.md',
          '/guide/content/Polylang-multi-language.md',
          '/guide/content/Printing.md',
          '/guide/content/Accessibility.md'
        ]
      },
      {
        text: 'Admin Pages',
        link: '/guide/content/wp-admin.md'
      },
    ],
    plugins: [
      searchPlugin({/* options*/}),
      mdEnhancePlugin({
        tasklist: true,
      }),
    ],
  }),
});