# Dependabot review

Scope: open alerts for the root `package-lock.json`. The Composer and documentation lockfiles were excluded from this review.

The root lockfile update moves 48 of the 65 alerts reported open by GitHub outside their affected version ranges. GitHub still reports all 65 as open because these local changes have not yet been pushed and rescanned. Seventeen alerts still match vulnerable versions in the updated lockfile:

| Alert(s) | Package(s) | Locked version(s) | Patch / limitation |
| --- | --- | --- | --- |
| #407 | `deepmerge` | 4.3.1 | No patched version is listed. |
| #398 | `serialize-javascript` | 6.0.2 | Patch is 7.1.3; the available audit fix requires `@wordpress/scripts` 37.0.0. |
| #376, #373, #312 | `markdown-it` | 12.3.2 | Patches are 14.3.1–14.3.3; the required upgrade is outside the current toolchain dependency range. |
| #362, #361, #360, #359, #358, #357 | `@opentelemetry/instrumentation-pg`, `-mysql`, `-mysql2`, `-mongoose`, `-knex`, `-tedious` | 0.51.1, 0.45.1, 0.45.2, 0.46.1, 0.44.1, 0.18.1 | Patches are 0.73.0, 0.67.0, 0.67.0, 0.67.0, 0.65.0, 0.40.0 respectively; these are pinned transitively by the current tooling graph. |
| #331, #327, #308 | `adm-zip` | 0.5.18 | Patch is 0.6.1; the current toolchain resolves the 0.5.x line. |
| #302 | `adm-zip` | 0.5.18 | No patched version is listed. |
| #326 | `webpack-dev-middleware` | 5.3.4 | Patch is 7.4.6; this major upgrade is not provided by the current toolchain dependency range. |
| #300, #288 | `extract-zip` | 2.0.1 | No patched version is listed. |
| #247 | `linkify-it` | 3.0.3 | Patch is 5.0.2; the current toolchain resolves the 3.x line. |

`@wordpress/scripts: wp-6.7` resolves to 30.0.6, matching the theme's WordPress 6.7 compatibility target. `npm audit` still reports 58 vulnerabilities (10 low, 23 moderate, 25 high); `npm audit fix` made no changes, and its force-fix path requires the breaking upgrade to `@wordpress/scripts` 37.0.0. That upgrade was not applied because it would leave the required WordPress 6.7-compatible toolchain and needs separate compatibility testing.

Next steps: push the updated lockfile so GitHub can rescan and close alerts whose vulnerable ranges are no longer present. Keep the remaining alerts tracked; revisit the transitive dependency graph when the supported WordPress core version advances, and recheck packages with no listed patched version when upstream fixes become available.
