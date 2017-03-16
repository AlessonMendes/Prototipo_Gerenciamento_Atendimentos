<table border="1px">
			<thead>
			<tr>
				<th>#</th>
				<th>nome</th>
				<th>telefone</th>
				<th>email</th>
			</tr>
			</thead>
			<tbody>
				@foreach($contatos as $contato)
				<tr>
				<td>{{$contato->id}}</td>
				<td>{{$contato->nome}}</td>
				<td>{{$contato->telefone}}</td>
				<td>{{$contato->email}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$contatos->links()}}