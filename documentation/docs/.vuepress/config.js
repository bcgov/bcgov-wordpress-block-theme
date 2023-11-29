import { defaultTheme } from "@vuepress/theme-default";
import { defineUserConfig } from "vuepress";
import { searchPlugin } from "@vuepress/plugin-search";
import { mdEnhancePlugin } from "vuepress-plugin-md-enhance";
import { getDirname, path } from '@vuepress/utils'

console.error(__dirname)
export default defineUserConfig({
  base: "/bcgov-wordpress-block-theme/",
  lang: "en-US",
  title: "BCGov Block Theme",
  description: "BCGov Block Theme Documentation",
  theme: defaultTheme({
    editLink: false,
    lastUpdated: true,
    repo: 'https://github.com/bcgov/des-training',
    repoLabel: 'Github',
    navbar: [
      {
        text: 'Home',
        link: '/',
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
      }
    ],
    plugins: [
      searchPlugin({/* options*/}),
      mdEnhancePlugin({
        tasklist: true,
      }),
    ],
    alias: {
      //'@public': path.resolve(getDirname(import.meta.url), './public'),
    }
   
    
  }),
});