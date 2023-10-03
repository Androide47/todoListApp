import React from 'react';
import axios from 'axios';

const Task = ({ task, loadTasks }) => {
  const deleteTask = async id => {
    await axios.delete(`http://localhost/php_todo_app/delete_task.php?id=${id}`);
    loadTasks();
  };

  return (
    <div className="col-md-4">
      <div className="card">
        <div className="card-body">
          <h5>{task.name}</h5>
          <button onClick={() => deleteTask(task.id)} className="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  );
};

export default Task;
