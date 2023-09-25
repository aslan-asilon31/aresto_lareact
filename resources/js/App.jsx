import React from 'react';
import ReactDOM from 'react-dom/client'; // Import ReactDOM correctly
// import { createRoot } from 'react-dom';

// import Home from './Page/Home';
// import List from './components/menu/list';
import Home from './Pages/Home';

// Remove the unused import statements

ReactDOM.createRoot(document.getElementById('app')).render(
  <React.StrictMode>
    <Home />
  </React.StrictMode>
);
