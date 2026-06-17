<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('client')->latest()->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $clients = Client::orderBy('name')->get();
        return view('projects.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'client_id' => ['required', 'exists:clients,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'budget' => ['nullable', 'numeric', 'min:0'],
            'deadline' => ['nullable', 'date'],
            'status' => ['required', 'in:pending,in_progress,completed,on_hold'],
            'priority' => ['required', 'in:low,medium,high,urgent'],
        ]);

        Project::create($data);
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        $project->load('client', 'tasks');
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $clients = Client::orderBy('name')->get();
        return view('projects.edit', compact('project', 'clients'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'client_id' => ['required', 'exists:clients,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'budget' => ['nullable', 'numeric', 'min:0'],
            'deadline' => ['nullable', 'date'],
            'status' => ['required', 'in:pending,in_progress,completed,on_hold'],
            'priority' => ['required', 'in:low,medium,high,urgent'],
        ]);

        $project->update($data);
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
