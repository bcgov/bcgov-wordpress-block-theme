# Findings

> everything depends on @wordpress/scripts. I could update that to v33, but it is a breaking change: it would break eslint, which would need to be re-configured to ignore several new rules  that were added to the eslint config inside @wordpress/scripts.

| Dependency of `@wordpress/scripts@30.27.0`? | Package | Why it can’t be fixed by `npm audit fix` or `npm update` |
|---|---|---|
| Yes (transitive) | `@opentelemetry/core` | It is pulled in by the current `@wordpress/scripts` toolchain; the fixed version would require a newer upstream build-tooling stack than the current install. |
| Yes (transitive) | `@opentelemetry/instrumentation-amqplib` | Same dependency chain through `@wordpress/scripts`; no compatible safe update is available from the current package set. |
| Yes (transitive) | `@opentelemetry/instrumentation-connect` | Same as above. |
| Yes (transitive) | `@opentelemetry/instrumentation-express` | Same as above. |
| Yes (transitive) | `@opentelemetry/instrumentation-fs` | Same as above. |
| Yes (transitive) | `@opentelemetry/instrumentation-hapi` | Same as above. |
| Yes (transitive) | `@opentelemetry/instrumentation-http` | Same as above. |
| Yes (transitive) | `@opentelemetry/instrumentation-koa` | Same as above. |
| Yes (transitive) | `@opentelemetry/instrumentation-mongoose` | Same as above. |
| Yes (transitive) | `@opentelemetry/instrumentation-mysql2` | Same as above. |
| Yes (transitive) | `@opentelemetry/instrumentation-pg` | Same as above. |
| Yes (transitive) | `@opentelemetry/instrumentation-undici` | Same as above. |
| Yes (transitive) | `@opentelemetry/resources` | Same as above. |
| Yes (transitive) | `@opentelemetry/sdk-trace-base` | Same as above. |
| Yes (transitive) | `@opentelemetry/sql-common` | Same as above. |
| Yes (transitive) | `@pmmmwh/react-refresh-webpack-plugin` | It is a transitive dependency of `@wordpress/scripts`; the secure version requires a newer toolchain than the current lockfile supports. |
| Yes (transitive) | `@sentry/node` | It is pulled in through the `lighthouse`/e2e chain under `@wordpress/scripts`; the fix needs a broader upstream upgrade. |
| Yes (direct) | `@wordpress/scripts` | The vulnerable package is the build tool itself; `npm audit fix`/`npm update` will not upgrade it to the safer major line under the current constraint. |
| Yes (transitive) | `adm-zip` | It is pulled in by `@wordpress/scripts`; the patched version is not reachable through the current dependency graph without a larger toolchain update. |
| Yes (transitive) | `copy-webpack-plugin` | It is brought in by `@wordpress/scripts`; the secure fix requires upgrading the surrounding webpack-related stack. |
| Yes (transitive) | `lighthouse` | It is pulled in by `@wordpress/scripts` via the Playwright/e2e dependency chain; the fix needs a newer upstream release. |
| Yes (transitive) | `linkify-it` | It is part of the markdown tooling chain under `@wordpress/scripts`; the safe fix requires a newer markdown toolchain. |
| Yes (transitive) | `markdown-it` | Same as above. |
| Yes (transitive) | `markdownlint` | Same as above. |
| Yes (transitive) | `markdownlint-cli` | Same as above. |
| Yes (transitive) | `minimatch` | Same as above. |
| Yes (transitive) | `serialize-javascript` | It is pulled in by the webpack-related subtree under `@wordpress/scripts`; the patched version needs a broader dependency upgrade. |
| Yes (transitive) | `sockjs` | It comes from `webpack-dev-server` in the current toolchain; the fix is on a newer major line. |
| Yes (transitive) | `uuid` | It is pulled in via the `sockjs`/`webpack-dev-server` path; the safe fix is not available through the current minor-range update path. |
| Yes (transitive/direct) | `webpack-dev-server` | The vulnerable version is on the older `5.x` branch; the safe fix is a major `6.x` upgrade, which `npm audit fix`/`npm update` will not do under the current constraints. |
