@extends('layouts.app')

@forelse($id as $id)
   <p> {{$id}}</p>
@empty

@endforelse
