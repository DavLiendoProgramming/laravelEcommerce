<div>
    <table class="table table-bordered table-striped">
    <thead>
    <th>Title</th>
    <th>Description</th>
    <th>Price</th>
    <th>img</th>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>
            {{$article->title}}
            </td>
            <td>
            {{$article->description}}
            </td>
            <td>
            {{$article->price}}
            </td>
            <td>
            {{$article->img}}
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

</div>
