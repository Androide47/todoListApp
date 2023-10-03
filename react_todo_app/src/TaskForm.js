import React, { useState } from 'react';
import axios from 'axios';

const TaskForm = ({ loadTasks }) => {
  const [name, setName] = useState("");

  const addTask = async () => {
    await axios.post('http://localhost/php_todo_app/create_task.php', { name });
    loadTasks();
    setName("");
  };

  return (
    <div>
      <input type="text" value={name} onChange={e => setName(e.target.value)} />
      <button onClick={addTask} className="btn btn-primary">Add</button>
    </div>
  );
};

export default TaskForm;
