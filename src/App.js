import React from "react";
import { Admin, Resource, DashboardMenuItem } from "react-admin";
import { UserList, UserEdit, UserCreate } from "./users";
import jsonServerProvider from "ra-data-json-server";
import authProvider from "./authProvider";

const dataProvider = jsonServerProvider("https://jsonplaceholder.typicode.com");
const App = () => (
  <Admin
    dataProvider={dataProvider}
    dashboard={DashboardMenuItem}
    authProvider={authProvider}
  >
    <Resource
      name="users"
      list={UserList}
      edit={UserEdit}
      create={UserCreate}
    />
  </Admin>
);

export default App;
