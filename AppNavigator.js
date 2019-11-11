import {createStackNavigator, createAppContainer } from 'react-navigation';
import Login from './pages/Login.js';
import Dashboard from './pages/Dashboard.js';
import TodoList from './pages/TodoList.js'; 

const AppNavigator = createStackNavigator(
    {
        Login:{
            screen:Login
        },
        Dashboard:{
            screen:Dashboard
        },
        TodoList:{
            screen:TodoList
        },
    },
    {
    initialRouteName: 'Login',
  }
);// end of createstacknavi

const App = createAppContainer(AppNavigator);
export default App;