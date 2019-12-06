<template>
    <div class="list-group">
        <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <input class="form-check-input position-static task-done" type="checkbox" value="option1">
                <span class="task-name">List group item heading</span>
                <small>3 days ago</small>
            </div>
            <small>Donec id elit non mi porta.</small>
        </div>
    </div>
</template>

<style>
    .list-group {
        width: 400px;
    }

    .task-done {
        margin-left: 0;
    }

    .task-name {
        margin-left: -75px;
    }
</style>
