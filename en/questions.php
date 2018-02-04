<?php
	$x = array(
       array
       (
            'question' => 'Which of these Studio Ghibli movies was not directed by Hayao Miyazaki?',
            'ch1' => 'Kiki\'s delivery service',
			'ch2' => 'Princess Mononoke',
			'ch3' => 'The wind rises',
			'ch4' => 'Tales from Earthsea',
			'correct' => 'Tales from Earthsea',
			'picked' => false
       ),
       array
       (
            'question' => 'Which Studio Ghibli movie has the most non award-winning nominations?',
            'ch1' => 'Spirited Away',
			'ch2' => 'The Wind Rises',
			'ch3' => 'Princess Mononoke',
			'ch4' => 'The Tale of the Princess Kaguya',
			'correct' => 'The Wind Rises',
			'picked' => false
       ),
       array
       (
            'question' => 'When was Studio Ghibli founded?',
            'ch1' => '1984',
			'ch2' => '1990',
			'ch3' => '1985',
			'ch4' => '1979',
			'correct' => '1985',
			'picked' => false
       ),
       array
       (
            'question' => 'What\'s the full name of the animator, producer, co-founder, director, screenwriter and author, Miyazaki?',
            'ch1' => 'Hayao Miyazaki',
			'ch2' => 'Gorō Miyazaki ',
			'ch3' => 'Hidetaka Miyazaki',
			'ch4' => 'Daisuke Miyazaki',
			'correct' => 'Hayao Miyazaki',
			'picked' => false
       ),
       array
       (
            'question' => 'What\'s the name of the main male character in the movie \'Princess Mononoke\'?',
            'ch1' => 'Jiro',
			'ch2' => 'Haku',
			'ch3' => 'Howl',
			'ch4' => 'Ashitaka',
			'correct' => 'Ashitaka',
			'picked' => false
       ),
	   array
       (
            'question' => 'What does Totoro, from the movie \'My Neighbor Totoro\', wear on his head when it\'s raining?',
            'ch1' => 'a hat',
			'ch2' => 'a leaf',
			'ch3' => 'a flower',
			'ch4' => 'nothing',
			'correct' => 'a leaf',
			'picked' => false
       ),
	   array
	   (
			'question' => 'Which Studio Ghibli movie has won an oscar?',
            'ch1' => 'Spirited Away',
			'ch2' => 'Howl\'s Moving Castle',
			'ch3' => 'When Marnie Was There',
			'ch4' => 'The Wind Rises',
			'correct' => 'Spirited Away',
			'picked' => false
	   ),
	   array
	   (
			'question' => 'What is the real name of composer and musical director, Joe Hisaishi?',
            'ch1' => 'Masashi Kishimoto',
			'ch2' => 'Yoichi Fujita',
			'ch3' => 'Kentaro Hisaishi',
			'ch4' => 'Mamoru Fujisawa',
			'correct' => 'Mamoru Fujisawa',
			'picked' => false
	   )
);

echo json_encode($x);
?>