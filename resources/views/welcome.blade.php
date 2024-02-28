
@include('partials/header')

{{-- main body --}}
<section>
    <div class="form">
        <form action="{{url('addtodo')}}"method="POST" enctype="multipart/form-data" style="background: none">
            @csrf
            <h2>Add To-do</h2>
            <br>
            <label for="task">Task</label>
            <input type="text" name="task" id="taskinp">
            
            <label for="task">Time</label>
            <input type="text" name="time" id="timeinp" placeholder="eg: 3 days">
            <input type="hidden"value="{{Auth::user()->email}}" name="email">
            <input type="submit"name="submit">
        </form>
    </div>
</section>
{{-- Data display --}}
<section>
    <div class="display">
        <table>
            <thead>
              <tr>
                <th id="task">Tasks</th>
                <th id="time">Time</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>@foreach ($tasks as $task)
              <tr id="tablehov">
                <form action="{{ route('tasks.done', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                <td>{{ $task->task }}</td>
                <td>{{ $task->time }}</td>
                <td> <button type="submit">Done</button></td>
                </form>
              </tr>
              @endforeach
              
            </tbody>
          </table>
    </div>
</section>
</body>
</html>