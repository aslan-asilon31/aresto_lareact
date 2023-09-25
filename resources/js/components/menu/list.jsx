import React, { useEffect, useState } from 'react';
import axios from 'axios';

function Menu() {
  const [menus, setMenus] = useState([]);

  useEffect(() => {
    // Fetch menu data from the API
    axios.get('http://localhost:8000/api/menus')
      .then((response) => {
        setMenus(response.data);
      })
      .catch((error) => {
        console.error('Error fetching menu data:', error);
      });
  }, []);

  return (
    <div className="menu">
      <h1>Menu Items</h1>
      <div className="menu-list">
        {menus.map((menu) => (
          <div key={menu.id} className="menu-item">
            <h2>{menu.name}</h2>
            <p>{menu.description}</p>
            <p>Price: {menu.price}</p>
            {/* Add other fields as needed */}
          </div>
        ))}
      </div>
    </div>
  );
}

export default Menu;
