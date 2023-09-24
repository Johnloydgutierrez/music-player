<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MusicModel;
use App\Models\MusicListModel;


class MusicController extends BaseController
{ 
    private $music;
    public function __construct()
    {
        $this->music = new MusicModel();
    }

    public function modal()
    {
        return view('modal');
    }

    
        public function index()
{
    
    $data['playlists'] = $this->playlistModel->findAll();   
}

    public function create()
    {
        
        $playlistName = $this->request->getPost('playlistName');
    
        
        $playlistModel = new \App\Models\PlaylistModel();
        $data = [
            'playlist_name' => $playlistName,
            
        ];
        $playlistModel->insert($data);
    
        
        return redirect()->to('/')->with('success', 'Playlist created successfully!');
    }
    
    
    public function viewAll()
    {
        $data['music'] = $this->music->findAll();
        return view('music', $data);
    }

    public function upload()
{
    $uploadedFile = $this->request->getFile('music_file');

    
    if ($uploadedFile->isValid() && $uploadedFile->getClientExtension() === 'mp3') {
        
        $newName = $uploadedFile->getRandomName();

        
        $uploadedFile->move(ROOTPATH . 'public/uploads', $newName);

        $musicData = [
            'music_title' => $uploadedFile->getClientName(),
            'file_path' => 'public/uploads/' . $newName, 
        ];

        $this->music->insert($musicData); 
    
        return redirect()->to('/music')->with('success', 'Music uploaded successfully!');
    } else {
        
        return redirect()->back()->with('error', 'Invalid file format. Please upload an MP3 file.');
    }
}

public function remove($id)
{
    
    $music = $this->music->find($id);

    if ($music) {
       
        $this->music->delete($id);

        
        return redirect()->to('/music')->with('success', 'Music removed successfully!');
    } else {
    
    }
}

    public function search()
    {
   
    }

    public function music($music)
    {
        echo $music;
    }
    public function chalsim()
    {
       $data['music'] = $this->music->findAll();
       return view('music', $data);
    }
    
}




