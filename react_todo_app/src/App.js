import React, { useState, useEffect } from 'react';
import axios from 'axios';

function App() {
  const [tasks, setTasks] = useState([]);
  const [newTask, setNewTask] = useState('');

  useEffect(() => {
    loadTasks();
  }, []);

  const loadTasks = async () => {
    const response = await axios.get('http://localhost/php_todo_app/index.php');
    const updatedTasks = response.data.map(task => ({ ...task, isEditing: false }));
    setTasks(updatedTasks);
  };

  const addTask = async () => {
    await axios.post('http://localhost/php_todo_app/add_task.php', { name: newTask });
    setNewTask('');
    loadTasks();
  };

  const deleteTask = async (id) => {
    await axios.post('http://localhost/php_todo_app/delete_task.php', { id });
    loadTasks();
  };

  const handleEditClick = (id) => {
    const newTasks = tasks.map((task) => {
      if (task.id === id) {
        return { ...task, isEditing: !task.isEditing }; // Toggle editing state
      }
      return task;
    });
    setTasks(newTasks);
  };

  const updateTask = async (id, newName) => {
    await axios.post('http://localhost/php_todo_app/edit_task.php', { id, name: newName });
    loadTasks();
  };

  return (
    <div className="container mt-5">
      <h1 className="text-center">To-Do List</h1>
      <div className="input-group mb-3">
        <input
          type="text"
          className="form-control"
          placeholder="New task"
          value={newTask}
          onChange={(e) => setNewTask(e.target.value)}
        />
        <div className="input-group-append">
          <button className="btn btn-outline-primary" type="button" onClick={addTask}>
            Add
          </button>
        </div>
      </div>
      <ul className="list-group">
        {tasks.map((task, index) => (
          <li className="list-group-item" key={task.id}>
            {index + 1}.
            {task.isEditing ? (
              <input
                type="text"
                defaultValue={task.name}
                onBlur={(e) => {
                  updateTask(task.id, e.target.value);
                  handleEditClick(task.id);  // Toggle off the editing
                }}
              />
            ) : (
              <span>{task.name}</span>
            )}
            <button className="btn btn-outline-danger float-right ml-2" onClick={() => deleteTask(task.id)}>
              Delete
            </button>
            <button className="btn btn-outline-secondary float-right" onClick={() => handleEditClick(task.id)}>
              {task.isEditing ? "Save" : "Edit"}
            </button>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default App;
