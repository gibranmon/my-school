import { createApp } from "vue";

import { Oruga } from "@oruga-ui/oruga-next";
import '@oruga-ui/theme-oruga/dist/oruga.min.css'; 


import App from "./App.vue";
import axios from "axios";

const app = createApp(App);
app.use(Oruga);
app.config.globalProperties.$axios = axios;
window.axios = axios;

app.mount('#app');