<?php

class SkillActionsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('skill_actions')->delete();
		DB::table('skill_actions')->insert(array (
			0 =>
			array (
				'action_id' => 1,
				'action_skill' => 'Fishing',
				'action_name' => 'Crayfish',
				'action_level' => 1,
				'action_experience' => 10,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			1 =>
			array (
				'action_id' => 2,
				'action_skill' => 'Fishing',
				'action_name' => 'Shrimp',
				'action_level' => 1,
				'action_experience' => 10,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			2 =>
			array (
				'action_id' => 3,
				'action_skill' => 'Fishing',
				'action_name' => 'Sardine',
				'action_level' => 5,
				'action_experience' => 20,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			3 =>
			array (
				'action_id' => 4,
				'action_skill' => 'Fishing',
				'action_name' => 'Karambwanji',
				'action_level' => 5,
				'action_experience' => 5,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			4 =>
			array (
				'action_id' => 5,
				'action_skill' => 'Fishing',
				'action_name' => 'Herring',
				'action_level' => 10,
				'action_experience' => 30,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			5 =>
			array (
				'action_id' => 6,
				'action_skill' => 'Fishing',
				'action_name' => 'Anchovies',
				'action_level' => 15,
				'action_experience' => 40,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			6 =>
			array (
				'action_id' => 7,
				'action_skill' => 'Fishing',
				'action_name' => 'Casket',
				'action_level' => 16,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			7 =>
			array (
				'action_id' => 8,
				'action_skill' => 'Fishing',
				'action_name' => 'Mackerel',
				'action_level' => 16,
				'action_experience' => 20,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			8 =>
			array (
				'action_id' => 9,
				'action_skill' => 'Fishing',
				'action_name' => 'Oyster',
				'action_level' => 16,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			9 =>
			array (
				'action_id' => 10,
				'action_skill' => 'Fishing',
				'action_name' => 'Seaweed',
				'action_level' => 16,
				'action_experience' => 1,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			10 =>
			array (
				'action_id' => 11,
				'action_skill' => 'Fishing',
				'action_name' => 'Trout',
				'action_level' => 20,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			11 =>
			array (
				'action_id' => 12,
				'action_skill' => 'Fishing',
				'action_name' => 'Cod',
				'action_level' => 23,
				'action_experience' => 45,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			12 =>
			array (
				'action_id' => 13,
				'action_skill' => 'Fishing',
				'action_name' => 'Pike',
				'action_level' => 25,
				'action_experience' => 60,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			13 =>
			array (
				'action_id' => 14,
				'action_skill' => 'Fishing',
				'action_name' => 'Slimy Eel',
				'action_level' => 28,
				'action_experience' => 65,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			14 =>
			array (
				'action_id' => 15,
				'action_skill' => 'Fishing',
				'action_name' => 'Salmon',
				'action_level' => 30,
				'action_experience' => 70,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			15 =>
			array (
				'action_id' => 16,
				'action_skill' => 'Fishing',
				'action_name' => 'Frog Spawn',
				'action_level' => 33,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			16 =>
			array (
				'action_id' => 17,
				'action_skill' => 'Fishing',
				'action_name' => 'Tuna',
				'action_level' => 35,
				'action_experience' => 80,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			17 =>
			array (
				'action_id' => 18,
				'action_skill' => 'Fishing',
				'action_name' => 'Cave Eel',
				'action_level' => 38,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			18 =>
			array (
				'action_id' => 19,
				'action_skill' => 'Fishing',
				'action_name' => 'Rainbow Fish',
				'action_level' => 38,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			19 =>
			array (
				'action_id' => 20,
				'action_skill' => 'Fishing',
				'action_name' => 'Lobster',
				'action_level' => 40,
				'action_experience' => 90,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			20 =>
			array (
				'action_id' => 21,
				'action_skill' => 'Fishing',
				'action_name' => 'Bass',
				'action_level' => 46,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			21 =>
			array (
				'action_id' => 22,
				'action_skill' => 'Fishing',
				'action_name' => 'Leaping Trout',
				'action_level' => 48,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			22 =>
			array (
				'action_id' => 23,
				'action_skill' => 'Fishing',
				'action_name' => 'Swordfish',
				'action_level' => 50,
				'action_experience' => 100,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			23 =>
			array (
				'action_id' => 24,
				'action_skill' => 'Fishing',
				'action_name' => 'Lava Eel',
				'action_level' => 53,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			24 =>
			array (
				'action_id' => 25,
				'action_skill' => 'Fishing',
				'action_name' => 'Leaping Salmon',
				'action_level' => 58,
				'action_experience' => 70,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			25 =>
			array (
				'action_id' => 26,
				'action_skill' => 'Fishing',
				'action_name' => 'Monkfish',
				'action_level' => 62,
				'action_experience' => 120,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			26 =>
			array (
				'action_id' => 27,
				'action_skill' => 'Fishing',
				'action_name' => 'Karambwan',
				'action_level' => 65,
				'action_experience' => 105,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			27 =>
			array (
				'action_id' => 28,
				'action_skill' => 'Fishing',
				'action_name' => 'Leaping Sturgeon',
				'action_level' => 70,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			28 =>
			array (
				'action_id' => 29,
				'action_skill' => 'Fishing',
				'action_name' => 'Shark',
				'action_level' => 76,
				'action_experience' => 110,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			29 =>
			array (
				'action_id' => 30,
				'action_skill' => 'Fishing',
				'action_name' => 'Sea Turtle',
				'action_level' => 79,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			30 =>
			array (
				'action_id' => 31,
				'action_skill' => 'Fishing',
				'action_name' => 'Manta Ray',
				'action_level' => 81,
				'action_experience' => 46,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			31 =>
			array (
				'action_id' => 32,
				'action_skill' => 'Fishing',
				'action_name' => 'Cave Fish',
				'action_level' => 85,
				'action_experience' => 300,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			32 =>
			array (
				'action_id' => 33,
				'action_skill' => 'Fishing',
				'action_name' => 'Rocktail',
				'action_level' => 90,
				'action_experience' => 380,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			33 =>
			array (
				'action_id' => 34,
				'action_skill' => 'Agility',
				'action_name' => 'Gnome Stronghold',
				'action_level' => 1,
				'action_experience' => 87,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			34 =>
			array (
				'action_id' => 35,
				'action_skill' => 'Agility',
				'action_name' => 'Toy Mice',
				'action_level' => 1,
				'action_experience' => 3,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			35 =>
			array (
				'action_id' => 36,
				'action_skill' => 'Agility',
				'action_name' => 'Agility Pyramid',
				'action_level' => 20,
				'action_experience' => 1014,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			36 =>
			array (
				'action_id' => 37,
				'action_skill' => 'Agility',
				'action_name' => 'Penguin Agility Course',
				'action_level' => 30,
				'action_experience' => 540,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			37 =>
			array (
				'action_id' => 38,
				'action_skill' => 'Agility',
				'action_name' => 'Barbarian Stronghold',
				'action_level' => 35,
				'action_experience' => 153,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			38 =>
			array (
				'action_id' => 39,
				'action_skill' => 'Agility',
				'action_name' => 'Agility Ticket x1',
				'action_level' => 40,
				'action_experience' => 240,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			39 =>
			array (
				'action_id' => 40,
				'action_skill' => 'Agility',
				'action_name' => 'Agility Ticket x10',
				'action_level' => 40,
				'action_experience' => 2480,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			40 =>
			array (
				'action_id' => 41,
				'action_skill' => 'Agility',
				'action_name' => 'Agility Ticket x100',
				'action_level' => 40,
				'action_experience' => 28000,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			41 =>
			array (
				'action_id' => 42,
				'action_skill' => 'Agility',
				'action_name' => 'Agility Ticket x1000',
				'action_level' => 40,
				'action_experience' => 320000,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			42 =>
			array (
				'action_id' => 43,
				'action_skill' => 'Agility',
				'action_name' => 'Agility Ticket x25',
				'action_level' => 40,
				'action_experience' => 6500,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			43 =>
			array (
				'action_id' => 44,
				'action_skill' => 'Agility',
				'action_name' => 'Ape Atoll',
				'action_level' => 48,
				'action_experience' => 580,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			44 =>
			array (
				'action_id' => 45,
				'action_skill' => 'Agility',
				'action_name' => 'Wilderness Outpost',
				'action_level' => 52,
				'action_experience' => 571,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			45 =>
			array (
				'action_id' => 46,
				'action_skill' => 'Agility',
				'action_name' => 'Werewolf',
				'action_level' => 60,
				'action_experience' => 540,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			46 =>
			array (
				'action_id' => 47,
				'action_skill' => 'Agility',
				'action_name' => 'Dorgesh-Kaan(Grapple x1)',
				'action_level' => 80,
				'action_experience' => 1242,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			47 =>
			array (
				'action_id' => 48,
				'action_skill' => 'Agility',
				'action_name' => 'Dorgesh-Kaan(Non-Grapple x2)',
				'action_level' => 80,
				'action_experience' => 2375,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			48 =>
			array (
				'action_id' => 49,
				'action_skill' => 'Agility',
				'action_name' => 'Advanced Gnome Course',
				'action_level' => 85,
				'action_experience' => 725,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			49 =>
			array (
				'action_id' => 50,
				'action_skill' => 'Agility',
				'action_name' => 'Advanced Barbarian Course',
				'action_level' => 9,
				'action_experience' => 741,
				'action_members' => 1,
				'action_category' => 'Course',
			),
			50 =>
			array (
				'action_id' => 51,
				'action_skill' => 'Construction',
				'action_name' => 'Crude Wooden Chair',
				'action_level' => 1,
				'action_experience' => 58,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			51 =>
			array (
				'action_id' => 52,
				'action_skill' => 'Construction',
				'action_name' => 'Oak Plank',
				'action_level' => 1,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Plank',
			),
			52 =>
			array (
				'action_id' => 53,
				'action_skill' => 'Construction',
				'action_name' => 'Wooden Bookcase',
				'action_level' => 4,
				'action_experience' => 115,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			53 =>
			array (
				'action_id' => 54,
				'action_skill' => 'Construction',
				'action_name' => 'Decorative Rock',
				'action_level' => 5,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			54 =>
			array (
				'action_id' => 55,
				'action_skill' => 'Construction',
				'action_name' => 'Wooden Chair',
				'action_level' => 8,
				'action_experience' => 87,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			55 =>
			array (
				'action_id' => 56,
				'action_skill' => 'Construction',
				'action_name' => 'Wooden Larder',
				'action_level' => 9,
				'action_experience' => 228,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			56 =>
			array (
				'action_id' => 57,
				'action_skill' => 'Construction',
				'action_name' => 'Pond',
				'action_level' => 10,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Upholstry',
			),
			57 =>
			array (
				'action_id' => 58,
				'action_skill' => 'Construction',
				'action_name' => 'Wood Dining Table',
				'action_level' => 10,
				'action_experience' => 115,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			58 =>
			array (
				'action_id' => 59,
				'action_skill' => 'Construction',
				'action_name' => 'Wood Table',
				'action_level' => 12,
				'action_experience' => 97,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			59 =>
			array (
				'action_id' => 60,
				'action_skill' => 'Construction',
				'action_name' => 'Rocking Chair',
				'action_level' => 14,
				'action_experience' => 96,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			60 =>
			array (
				'action_id' => 61,
				'action_skill' => 'Construction',
				'action_name' => 'Oak Chair',
				'action_level' => 19,
				'action_experience' => 120,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			61 =>
			array (
				'action_id' => 62,
				'action_skill' => 'Construction',
				'action_name' => 'Oak Dining Table',
				'action_level' => 22,
				'action_experience' => 240,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			62 =>
			array (
				'action_id' => 63,
				'action_skill' => 'Construction',
				'action_name' => 'Oak Armchair',
				'action_level' => 26,
				'action_experience' => 180,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			63 =>
			array (
				'action_id' => 64,
				'action_skill' => 'Construction',
				'action_name' => 'Adamant Armour',
				'action_level' => 28,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Upholstry',
			),
			64 =>
			array (
				'action_id' => 65,
				'action_skill' => 'Construction',
				'action_name' => 'CW Armour 1',
				'action_level' => 28,
				'action_experience' => 135,
				'action_members' => 1,
				'action_category' => 'Upholstry',
			),
			65 =>
			array (
				'action_id' => 66,
				'action_skill' => 'Construction',
				'action_name' => 'CW Armour 2',
				'action_level' => 28,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Upholstry',
			),
			66 =>
			array (
				'action_id' => 67,
				'action_skill' => 'Construction',
				'action_name' => 'CW Armour 3',
				'action_level' => 28,
				'action_experience' => 165,
				'action_members' => 1,
				'action_category' => 'Upholstry',
			),
			67 =>
			array (
				'action_id' => 68,
				'action_skill' => 'Construction',
				'action_name' => 'Mithril Armour',
				'action_level' => 28,
				'action_experience' => 135,
				'action_members' => 1,
				'action_category' => 'Upholstry',
			),
			68 =>
			array (
				'action_id' => 69,
				'action_skill' => 'Construction',
				'action_name' => 'Runite Armour',
				'action_level' => 28,
				'action_experience' => 165,
				'action_members' => 1,
				'action_category' => 'Upholstry',
			),
			69 =>
			array (
				'action_id' => 70,
				'action_skill' => 'Construction',
				'action_name' => 'Oak Bookcase',
				'action_level' => 29,
				'action_experience' => 180,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			70 =>
			array (
				'action_id' => 71,
				'action_skill' => 'Construction',
				'action_name' => 'Carved Oak Table',
				'action_level' => 31,
				'action_experience' => 360,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			71 =>
			array (
				'action_id' => 72,
				'action_skill' => 'Construction',
				'action_name' => 'Oak Table',
				'action_level' => 32,
				'action_experience' => 180,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			72 =>
			array (
				'action_id' => 73,
				'action_skill' => 'Construction',
				'action_name' => 'Oak Larder',
				'action_level' => 33,
				'action_experience' => 480,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			73 =>
			array (
				'action_id' => 74,
				'action_skill' => 'Construction',
				'action_name' => 'Teak Armchair',
				'action_level' => 35,
				'action_experience' => 180,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			74 =>
			array (
				'action_id' => 75,
				'action_skill' => 'Construction',
				'action_name' => 'Teak Dining Table',
				'action_level' => 38,
				'action_experience' => 360,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			75 =>
			array (
				'action_id' => 76,
				'action_skill' => 'Construction',
				'action_name' => 'Mahogany Bookcase',
				'action_level' => 40,
				'action_experience' => 420,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			76 =>
			array (
				'action_id' => 77,
				'action_skill' => 'Construction',
				'action_name' => 'Darklight',
				'action_level' => 42,
				'action_experience' => 202,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			77 =>
			array (
				'action_id' => 78,
				'action_skill' => 'Construction',
				'action_name' => 'Excalibur',
				'action_level' => 42,
				'action_experience' => 194,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			78 =>
			array (
				'action_id' => 79,
				'action_skill' => 'Construction',
				'action_name' => 'Silverlight',
				'action_level' => 42,
				'action_experience' => 187,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			79 =>
			array (
				'action_id' => 80,
				'action_skill' => 'Construction',
				'action_name' => 'Teak Larder',
				'action_level' => 43,
				'action_experience' => 750,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			80 =>
			array (
				'action_id' => 81,
				'action_skill' => 'Construction',
				'action_name' => 'Carved Teak Table',
				'action_level' => 45,
				'action_experience' => 600,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			81 =>
			array (
				'action_id' => 82,
				'action_skill' => 'Construction',
				'action_name' => 'Mahogany Armchair',
				'action_level' => 50,
				'action_experience' => 280,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			82 =>
			array (
				'action_id' => 83,
				'action_skill' => 'Construction',
				'action_name' => 'Mahogany Table',
				'action_level' => 52,
				'action_experience' => 840,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			83 =>
			array (
				'action_id' => 84,
				'action_skill' => 'Construction',
				'action_name' => 'Teak Table',
				'action_level' => 52,
				'action_experience' => 270,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			84 =>
			array (
				'action_id' => 85,
				'action_skill' => 'Construction',
				'action_name' => 'Gilded 4-Poster',
				'action_level' => 60,
				'action_experience' => 1330,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			85 =>
			array (
				'action_id' => 86,
				'action_skill' => 'Construction',
				'action_name' => 'Gilded Bench',
				'action_level' => 61,
				'action_experience' => 1760,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			86 =>
			array (
				'action_id' => 87,
				'action_skill' => 'Construction',
				'action_name' => 'Opulent Table',
				'action_level' => 72,
				'action_experience' => 3100,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			87 =>
			array (
				'action_id' => 88,
				'action_skill' => 'Construction',
				'action_name' => 'Dungeon Oak Door',
				'action_level' => 74,
				'action_experience' => 600,
				'action_members' => 1,
				'action_category' => 'Upholstry',
			),
			88 =>
			array (
				'action_id' => 89,
				'action_skill' => 'Construction',
				'action_name' => 'Gilded Wardrobe',
				'action_level' => 87,
				'action_experience' => 720,
				'action_members' => 1,
				'action_category' => 'Furniture',
			),
			89 =>
			array (
				'action_id' => 90,
				'action_skill' => 'Cooking',
				'action_name' => 'Anchovies',
				'action_level' => 1,
				'action_experience' => 30,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			90 =>
			array (
				'action_id' => 91,
				'action_skill' => 'Cooking',
				'action_name' => 'Crayfish',
				'action_level' => 1,
				'action_experience' => 30,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			91 =>
			array (
				'action_id' => 92,
				'action_skill' => 'Cooking',
				'action_name' => 'Karambwanji',
				'action_level' => 1,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			92 =>
			array (
				'action_id' => 93,
				'action_skill' => 'Cooking',
				'action_name' => 'Karambwan(Poorly Cooked)',
				'action_level' => 1,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			93 =>
			array (
				'action_id' => 94,
				'action_skill' => 'Cooking',
				'action_name' => 'Meat',
				'action_level' => 1,
				'action_experience' => 30,
				'action_members' => 0,
				'action_category' => 'Meat',
			),
			94 =>
			array (
				'action_id' => 95,
				'action_skill' => 'Cooking',
				'action_name' => 'Cooked Rabbit',
				'action_level' => 1,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Meat',
			),
			95 =>
			array (
				'action_id' => 96,
				'action_skill' => 'Cooking',
				'action_name' => 'Shrimp',
				'action_level' => 1,
				'action_experience' => 30,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			96 =>
			array (
				'action_id' => 97,
				'action_skill' => 'Cooking',
				'action_name' => 'Chicken',
				'action_level' => 1,
				'action_experience' => 30,
				'action_members' => 0,
				'action_category' => 'Meat',
			),
			97 =>
			array (
				'action_id' => 98,
				'action_skill' => 'Cooking',
				'action_name' => 'Bread',
				'action_level' => 1,
				'action_experience' => 40,
				'action_members' => 0,
				'action_category' => 'Bread',
			),
			98 =>
			array (
				'action_id' => 99,
				'action_skill' => 'Cooking',
				'action_name' => 'Sardine',
				'action_level' => 1,
				'action_experience' => 40,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			99 =>
			array (
				'action_id' => 100,
				'action_skill' => 'Cooking',
				'action_name' => 'Herring',
				'action_level' => 5,
				'action_experience' => 40,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			100 =>
			array (
				'action_id' => 101,
				'action_skill' => 'Cooking',
				'action_name' => 'Fruit Blast',
				'action_level' => 6,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			101 =>
			array (
				'action_id' => 102,
				'action_skill' => 'Cooking',
				'action_name' => 'Baked Potato',
				'action_level' => 7,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'Potato',
			),
			102 =>
			array (
				'action_id' => 103,
				'action_skill' => 'Cooking',
				'action_name' => 'Pineapple Punch',
				'action_level' => 8,
				'action_experience' => 70,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			103 =>
			array (
				'action_id' => 104,
				'action_skill' => 'Cooking',
				'action_name' => 'Spicy Sauce',
				'action_level' => 9,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			104 =>
			array (
				'action_id' => 105,
				'action_skill' => 'Cooking',
				'action_name' => 'Mackerel',
				'action_level' => 10,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			105 =>
			array (
				'action_id' => 106,
				'action_skill' => 'Cooking',
				'action_name' => 'Redberry Pie',
				'action_level' => 10,
				'action_experience' => 78,
				'action_members' => 0,
				'action_category' => 'Pie',
			),
			106 =>
			array (
				'action_id' => 107,
				'action_skill' => 'Cooking',
				'action_name' => 'Toad Crunchies',
				'action_level' => 10,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			107 =>
			array (
				'action_id' => 108,
				'action_skill' => 'Cooking',
				'action_name' => 'Chilli Con Carne',
				'action_level' => 11,
				'action_experience' => 55,
				'action_members' => 1,
				'action_category' => 'Meat',
			),
			108 =>
			array (
				'action_id' => 109,
				'action_skill' => 'Cooking',
				'action_name' => 'Thin Snail',
				'action_level' => 12,
				'action_experience' => 70,
				'action_members' => 1,
				'action_category' => 'Meat',
			),
			109 =>
			array (
				'action_id' => 110,
				'action_skill' => 'Cooking',
				'action_name' => 'Spice Crunchies',
				'action_level' => 12,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			110 =>
			array (
				'action_id' => 111,
				'action_skill' => 'Cooking',
				'action_name' => 'Scrambled Egg',
				'action_level' => 13,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			111 =>
			array (
				'action_id' => 112,
				'action_skill' => 'Cooking',
				'action_name' => 'Cider',
				'action_level' => 14,
				'action_experience' => 182,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			112 =>
			array (
				'action_id' => 113,
				'action_skill' => 'Cooking',
				'action_name' => 'Worm Crunchies',
				'action_level' => 14,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			113 =>
			array (
				'action_id' => 114,
				'action_skill' => 'Cooking',
				'action_name' => 'Trout',
				'action_level' => 15,
				'action_experience' => 70,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			114 =>
			array (
				'action_id' => 115,
				'action_skill' => 'Cooking',
				'action_name' => 'Jungle Spider',
				'action_level' => 16,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			115 =>
			array (
				'action_id' => 116,
				'action_skill' => 'Cooking',
				'action_name' => 'Choc Chip Crunchies',
				'action_level' => 16,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			116 =>
			array (
				'action_id' => 117,
				'action_skill' => 'Cooking',
				'action_name' => 'Roasted Rabbit',
				'action_level' => 16,
				'action_experience' => 72,
				'action_members' => 1,
				'action_category' => 'Meat',
			),
			117 =>
			array (
				'action_id' => 118,
				'action_skill' => 'Cooking',
				'action_name' => 'Lean Snail',
				'action_level' => 17,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Meat',
			),
			118 =>
			array (
				'action_id' => 119,
				'action_skill' => 'Cooking',
				'action_name' => 'Cod',
				'action_level' => 18,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			119 =>
			array (
				'action_id' => 120,
				'action_skill' => 'Cooking',
				'action_name' => 'Cooked Pawya',
				'action_level' => 1,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			120 =>
			array (
				'action_id' => 121,
				'action_skill' => 'Cooking',
				'action_name' => 'Wizard Blizzard',
				'action_level' => 18,
				'action_experience' => 110,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			121 =>
			array (
				'action_id' => 122,
				'action_skill' => 'Cooking',
				'action_name' => 'Dwarven Stout',
				'action_level' => 19,
				'action_experience' => 215,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			122 =>
			array (
				'action_id' => 123,
				'action_skill' => 'Cooking',
				'action_name' => 'Pike',
				'action_level' => 20,
				'action_experience' => 80,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			123 =>
			array (
				'action_id' => 124,
				'action_skill' => 'Cooking',
				'action_name' => 'Meat Pie',
				'action_level' => 20,
				'action_experience' => 110,
				'action_members' => 0,
				'action_category' => 'Pie',
			),
			124 =>
			array (
				'action_id' => 125,
				'action_skill' => 'Cooking',
				'action_name' => 'Nettle Tea',
				'action_level' => 20,
				'action_experience' => 52,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			125 =>
			array (
				'action_id' => 126,
				'action_skill' => 'Cooking',
				'action_name' => 'Short Green Guy',
				'action_level' => 20,
				'action_experience' => 120,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			126 =>
			array (
				'action_id' => 127,
				'action_skill' => 'Cooking',
				'action_name' => 'Crab Meat',
				'action_level' => 21,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			127 =>
			array (
				'action_id' => 128,
				'action_skill' => 'Cooking',
				'action_name' => 'Roasted Beast Meat',
				'action_level' => 21,
				'action_experience' => 82,
				'action_members' => 1,
				'action_category' => 'Meat',
			),
			128 =>
			array (
				'action_id' => 129,
				'action_skill' => 'Cooking',
				'action_name' => 'Fat Snail',
				'action_level' => 22,
				'action_experience' => 95,
				'action_members' => 1,
				'action_category' => 'Meat',
			),
			129 =>
			array (
				'action_id' => 130,
				'action_skill' => 'Cooking',
				'action_name' => 'Egg and Tomato',
				'action_level' => 23,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			130 =>
			array (
				'action_id' => 131,
				'action_skill' => 'Cooking',
				'action_name' => 'Asgarnian Ale',
				'action_level' => 24,
				'action_experience' => 248,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			131 =>
			array (
				'action_id' => 132,
				'action_skill' => 'Cooking',
				'action_name' => 'Fruit Batta',
				'action_level' => 25,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Batta',
			),
			132 =>
			array (
				'action_id' => 133,
				'action_skill' => 'Cooking',
				'action_name' => 'Salmon',
				'action_level' => 25,
				'action_experience' => 90,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			133 =>
			array (
				'action_id' => 134,
				'action_skill' => 'Cooking',
				'action_name' => 'Stew',
				'action_level' => 25,
				'action_experience' => 117,
				'action_members' => 0,
				'action_category' => 'Special',
			),
			134 =>
			array (
				'action_id' => 135,
				'action_skill' => 'Cooking',
				'action_name' => 'Toad Batta',
				'action_level' => 26,
				'action_experience' => 152,
				'action_members' => 1,
				'action_category' => 'Batta',
			),
			135 =>
			array (
				'action_id' => 136,
				'action_skill' => 'Cooking',
				'action_name' => 'Worm Batta',
				'action_level' => 27,
				'action_experience' => 154,
				'action_members' => 1,
				'action_category' => 'Batta',
			),
			136 =>
			array (
				'action_id' => 137,
				'action_skill' => 'Cooking',
				'action_name' => 'Slimy Eel',
				'action_level' => 28,
				'action_experience' => 95,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			137 =>
			array (
				'action_id' => 138,
				'action_skill' => 'Cooking',
				'action_name' => 'Sweetcorn',
				'action_level' => 28,
				'action_experience' => 104,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			138 =>
			array (
				'action_id' => 139,
				'action_skill' => 'Cooking',
				'action_name' => 'Vegetable Batta',
				'action_level' => 28,
				'action_experience' => 156,
				'action_members' => 1,
				'action_category' => 'Batta',
			),
			139 =>
			array (
				'action_id' => 140,
				'action_skill' => 'Cooking',
				'action_name' => 'Cheese and Tomato Batta',
				'action_level' => 29,
				'action_experience' => 158,
				'action_members' => 1,
				'action_category' => 'Batta',
			),
			140 =>
			array (
				'action_id' => 141,
				'action_skill' => 'Cooking',
				'action_name' => 'Greenman\'s Ale',
				'action_level' => 29,
				'action_experience' => 281,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			141 =>
			array (
				'action_id' => 142,
				'action_skill' => 'Cooking',
				'action_name' => 'Mud Pie',
				'action_level' => 29,
				'action_experience' => 128,
				'action_members' => 1,
				'action_category' => 'Pie',
			),
			142 =>
			array (
				'action_id' => 143,
				'action_skill' => 'Cooking',
				'action_name' => 'Chompy',
				'action_level' => 30,
				'action_experience' => 140,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			143 =>
			array (
				'action_id' => 144,
				'action_skill' => 'Cooking',
				'action_name' => 'Karambwan (Throuroughly Cooked)',
				'action_level' => 30,
				'action_experience' => 190,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			144 =>
			array (
				'action_id' => 145,
				'action_skill' => 'Cooking',
				'action_name' => 'Tuna',
				'action_level' => 30,
				'action_experience' => 100,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			145 =>
			array (
				'action_id' => 146,
				'action_skill' => 'Cooking',
				'action_name' => 'Apple Pie',
				'action_level' => 30,
				'action_experience' => 170,
				'action_members' => 0,
				'action_category' => 'Pie',
			),
			146 =>
			array (
				'action_id' => 147,
				'action_skill' => 'Cooking',
				'action_name' => 'Worm Hole',
				'action_level' => 30,
				'action_experience' => 170,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			147 =>
			array (
				'action_id' => 148,
				'action_skill' => 'Cooking',
				'action_name' => 'Fishcake',
				'action_level' => 31,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			148 =>
			array (
				'action_id' => 149,
				'action_skill' => 'Cooking',
				'action_name' => 'Drunk Dragon',
				'action_level' => 32,
				'action_experience' => 160,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			149 =>
			array (
				'action_id' => 150,
				'action_skill' => 'Cooking',
				'action_name' => 'Chocolate Saturday',
				'action_level' => 33,
				'action_experience' => 170,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			150 =>
			array (
				'action_id' => 151,
				'action_skill' => 'Cooking',
				'action_name' => 'Garden Pie',
				'action_level' => 34,
				'action_experience' => 138,
				'action_members' => 1,
				'action_category' => 'Pie',
			),
			151 =>
			array (
				'action_id' => 152,
				'action_skill' => 'Cooking',
				'action_name' => 'Wizard\'s Mind Bomb',
				'action_level' => 34,
				'action_experience' => 314,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			152 =>
			array (
				'action_id' => 153,
				'action_skill' => 'Cooking',
				'action_name' => 'Plain Pizza',
				'action_level' => 35,
				'action_experience' => 143,
				'action_members' => 0,
				'action_category' => 'Pizza',
			),
			153 =>
			array (
				'action_id' => 154,
				'action_skill' => 'Cooking',
				'action_name' => 'Rainbow Fish',
				'action_level' => 35,
				'action_experience' => 110,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			154 =>
			array (
				'action_id' => 155,
				'action_skill' => 'Cooking',
				'action_name' => 'Wine',
				'action_level' => 35,
				'action_experience' => 200,
				'action_members' => 0,
				'action_category' => 'Special',
			),
			155 =>
			array (
				'action_id' => 156,
				'action_skill' => 'Cooking',
				'action_name' => 'Vegetable Ball',
				'action_level' => 35,
				'action_experience' => 175,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			156 =>
			array (
				'action_id' => 157,
				'action_skill' => 'Cooking',
				'action_name' => 'Blurberry Special',
				'action_level' => 37,
				'action_experience' => 180,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			157 =>
			array (
				'action_id' => 158,
				'action_skill' => 'Cooking',
				'action_name' => 'Cave Eel',
				'action_level' => 38,
				'action_experience' => 115,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			158 =>
			array (
				'action_id' => 159,
				'action_skill' => 'Cooking',
				'action_name' => 'Baked Potato with Butter',
				'action_level' => 39,
				'action_experience' => 96,
				'action_members' => 1,
				'action_category' => 'Potato',
			),
			159 =>
			array (
				'action_id' => 160,
				'action_skill' => 'Cooking',
				'action_name' => 'Dragon Bitter',
				'action_level' => 39,
				'action_experience' => 347,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			160 =>
			array (
				'action_id' => 161,
				'action_skill' => 'Cooking',
				'action_name' => 'Lobster',
				'action_level' => 40,
				'action_experience' => 120,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			161 =>
			array (
				'action_id' => 162,
				'action_skill' => 'Cooking',
				'action_name' => 'Cake',
				'action_level' => 40,
				'action_experience' => 180,
				'action_members' => 0,
				'action_category' => 'Cake',
			),
			162 =>
			array (
				'action_id' => 163,
				'action_skill' => 'Cooking',
				'action_name' => 'Tangled Toad\'s Legs',
				'action_level' => 40,
				'action_experience' => 185,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			163 =>
			array (
				'action_id' => 164,
				'action_skill' => 'Cooking',
				'action_name' => 'Chilli Potato',
				'action_level' => 41,
				'action_experience' => 166,
				'action_members' => 1,
				'action_category' => 'Potato',
			),
			164 =>
			array (
				'action_id' => 165,
				'action_skill' => 'Cooking',
				'action_name' => 'Jubbly',
				'action_level' => 41,
				'action_experience' => 160,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			165 =>
			array (
				'action_id' => 166,
				'action_skill' => 'Cooking',
				'action_name' => 'Chocolate Bomb',
				'action_level' => 42,
				'action_experience' => 190,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			166 =>
			array (
				'action_id' => 167,
				'action_skill' => 'Cooking',
				'action_name' => 'Fried Onions',
				'action_level' => 42,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			167 =>
			array (
				'action_id' => 168,
				'action_skill' => 'Cooking',
				'action_name' => 'Bass',
				'action_level' => 43,
				'action_experience' => 130,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			168 =>
			array (
				'action_id' => 169,
				'action_skill' => 'Cooking',
				'action_name' => 'Moonlight Mead',
				'action_level' => 44,
				'action_experience' => 380,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			169 =>
			array (
				'action_id' => 170,
				'action_skill' => 'Cooking',
				'action_name' => 'Swordfish',
				'action_level' => 45,
				'action_experience' => 140,
				'action_members' => 0,
				'action_category' => 'Fish',
			),
			170 =>
			array (
				'action_id' => 171,
				'action_skill' => 'Cooking',
				'action_name' => 'Meat Pizza',
				'action_level' => 45,
				'action_experience' => 169,
				'action_members' => 0,
				'action_category' => 'Pizza',
			),
			171 =>
			array (
				'action_id' => 172,
				'action_skill' => 'Cooking',
				'action_name' => 'Fried Mushrooms',
				'action_level' => 46,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			172 =>
			array (
				'action_id' => 173,
				'action_skill' => 'Cooking',
				'action_name' => 'Baked Potato with Cheese',
				'action_level' => 47,
				'action_experience' => 200,
				'action_members' => 1,
				'action_category' => 'Potato',
			),
			173 =>
			array (
				'action_id' => 174,
				'action_skill' => 'Cooking',
				'action_name' => 'Fish Pie',
				'action_level' => 47,
				'action_experience' => 164,
				'action_members' => 1,
				'action_category' => 'Pie',
			),
			174 =>
			array (
				'action_id' => 175,
				'action_skill' => 'Cooking',
				'action_name' => 'Cheese',
				'action_level' => 48,
				'action_experience' => 64,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			175 =>
			array (
				'action_id' => 176,
				'action_skill' => 'Cooking',
				'action_name' => 'Axeman\'s Folly',
				'action_level' => 49,
				'action_experience' => 413,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			176 =>
			array (
				'action_id' => 177,
				'action_skill' => 'Cooking',
				'action_name' => 'Chocolate Cake',
				'action_level' => 50,
				'action_experience' => 210,
				'action_members' => 0,
				'action_category' => 'Cake',
			),
			177 =>
			array (
				'action_id' => 178,
				'action_skill' => 'Cooking',
				'action_name' => 'Oomlie Wrap',
				'action_level' => 50,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Gnome',
			),
			178 =>
			array (
				'action_id' => 179,
				'action_skill' => 'Cooking',
				'action_name' => 'Egg and Tomato Potato',
				'action_level' => 51,
				'action_experience' => 196,
				'action_members' => 1,
				'action_category' => 'Potato',
			),
			179 =>
			array (
				'action_id' => 180,
				'action_skill' => 'Cooking',
				'action_name' => 'Lava Eel',
				'action_level' => 53,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			180 =>
			array (
				'action_id' => 181,
				'action_skill' => 'Cooking',
				'action_name' => 'Chef\'s Delight',
				'action_level' => 54,
				'action_experience' => 446,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			181 =>
			array (
				'action_id' => 182,
				'action_skill' => 'Cooking',
				'action_name' => 'Anchovy Pizza',
				'action_level' => 55,
				'action_experience' => 182,
				'action_members' => 0,
				'action_category' => 'Pizza',
			),
			182 =>
			array (
				'action_id' => 183,
				'action_skill' => 'Cooking',
				'action_name' => 'Mushroom and Onion',
				'action_level' => 57,
				'action_experience' => 120,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			183 =>
			array (
				'action_id' => 184,
				'action_skill' => 'Cooking',
				'action_name' => 'Pitta Bread',
				'action_level' => 58,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Bread',
			),
			184 =>
			array (
				'action_id' => 185,
				'action_skill' => 'Cooking',
				'action_name' => 'Ugthanki Kebab',
				'action_level' => 58,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Meat',
			),
			185 =>
			array (
				'action_id' => 186,
				'action_skill' => 'Cooking',
				'action_name' => 'Curry',
				'action_level' => 60,
				'action_experience' => 280,
				'action_members' => 1,
				'action_category' => 'Meat',
			),
			186 =>
			array (
				'action_id' => 187,
				'action_skill' => 'Cooking',
				'action_name' => 'Monkfish',
				'action_level' => 62,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			187 =>
			array (
				'action_id' => 188,
				'action_skill' => 'Cooking',
				'action_name' => 'Mushroom and Onion Potato',
				'action_level' => 64,
				'action_experience' => 271,
				'action_members' => 1,
				'action_category' => 'Potato',
			),
			188 =>
			array (
				'action_id' => 189,
				'action_skill' => 'Cooking',
				'action_name' => 'Pineapple Pizza',
				'action_level' => 65,
				'action_experience' => 188,
				'action_members' => 1,
				'action_category' => 'Pizza',
			),
			189 =>
			array (
				'action_id' => 190,
				'action_skill' => 'Cooking',
				'action_name' => 'Tuna and Corn',
				'action_level' => 67,
				'action_experience' => 204,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			190 =>
			array (
				'action_id' => 191,
				'action_skill' => 'Cooking',
				'action_name' => 'Admiral Pie',
				'action_level' => 70,
				'action_experience' => 210,
				'action_members' => 1,
				'action_category' => 'Pie',
			),
			191 =>
			array (
				'action_id' => 192,
				'action_skill' => 'Cooking',
				'action_name' => 'Shark',
				'action_level' => 80,
				'action_experience' => 210,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			192 =>
			array (
				'action_id' => 193,
				'action_skill' => 'Cooking',
				'action_name' => 'Seaturtle',
				'action_level' => 82,
				'action_experience' => 211,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			193 =>
			array (
				'action_id' => 194,
				'action_skill' => 'Cooking',
				'action_name' => 'Wild Pie',
				'action_level' => 85,
				'action_experience' => 240,
				'action_members' => 1,
				'action_category' => 'Pie',
			),
			194 =>
			array (
				'action_id' => 195,
				'action_skill' => 'Cooking',
				'action_name' => 'Mantaray',
				'action_level' => 91,
				'action_experience' => 216,
				'action_members' => 1,
				'action_category' => 'Fish',
			),
			195 =>
			array (
				'action_id' => 196,
				'action_skill' => 'Cooking',
				'action_name' => 'Summer Pie',
				'action_level' => 95,
				'action_experience' => 260,
				'action_members' => 1,
				'action_category' => 'Pie',
			),
			196 =>
			array (
				'action_id' => 197,
				'action_skill' => 'Crafting',
				'action_name' => 'Opal',
				'action_level' => 1,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'Gem',
			),
			197 =>
			array (
				'action_id' => 198,
				'action_skill' => 'Crafting',
				'action_name' => 'Wool',
				'action_level' => 1,
				'action_experience' => 3,
				'action_members' => 0,
				'action_category' => 'Material',
			),
			198 =>
			array (
				'action_id' => 199,
				'action_skill' => 'Crafting',
				'action_name' => 'Gold Ring ',
				'action_level' => 5,
				'action_experience' => 15,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			199 =>
			array (
				'action_id' => 200,
				'action_skill' => 'Crafting',
				'action_name' => 'Gold Necklace',
				'action_level' => 6,
				'action_experience' => 20,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			200 =>
			array (
				'action_id' => 201,
				'action_skill' => 'Crafting',
				'action_name' => 'Gold Bracelet',
				'action_level' => 7,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			201 =>
			array (
				'action_id' => 202,
				'action_skill' => 'Crafting',
				'action_name' => 'Gold Amulet',
				'action_level' => 8,
				'action_experience' => 30,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			202 =>
			array (
				'action_id' => 203,
				'action_skill' => 'Crafting',
				'action_name' => 'Cowl',
				'action_level' => 9,
				'action_experience' => 19,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			203 =>
			array (
				'action_id' => 204,
				'action_skill' => 'Crafting',
				'action_name' => 'Bow Strings',
				'action_level' => 10,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'Material',
			),
			204 =>
			array (
				'action_id' => 205,
				'action_skill' => 'Crafting',
				'action_name' => 'Vambraces',
				'action_level' => 11,
				'action_experience' => 22,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			205 =>
			array (
				'action_id' => 206,
				'action_skill' => 'Crafting',
				'action_name' => 'Jade',
				'action_level' => 13,
				'action_experience' => 20,
				'action_members' => 1,
				'action_category' => 'Gem',
			),
			206 =>
			array (
				'action_id' => 207,
				'action_skill' => 'Crafting',
				'action_name' => 'Leather Body',
				'action_level' => 14,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			207 =>
			array (
				'action_id' => 208,
				'action_skill' => 'Crafting',
				'action_name' => 'Holy Symbol',
				'action_level' => 16,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Material',
			),
			208 =>
			array (
				'action_id' => 209,
				'action_skill' => 'Crafting',
				'action_name' => 'Red Topaz',
				'action_level' => 17,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Gem',
			),
			209 =>
			array (
				'action_id' => 210,
				'action_skill' => 'Crafting',
				'action_name' => 'Unholy Symbol',
				'action_level' => 18,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Material',
			),
			210 =>
			array (
				'action_id' => 211,
				'action_skill' => 'Crafting',
				'action_name' => 'Chaps',
				'action_level' => 19,
				'action_experience' => 27,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			211 =>
			array (
				'action_id' => 212,
				'action_skill' => 'Crafting',
				'action_name' => 'Magic Strings',
				'action_level' => 20,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Material',
			),
			212 =>
			array (
				'action_id' => 213,
				'action_skill' => 'Crafting',
				'action_name' => 'Sapphire',
				'action_level' => 20,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Gem',
			),
			213 =>
			array (
				'action_id' => 214,
				'action_skill' => 'Crafting',
				'action_name' => 'Sapphire Ring',
				'action_level' => 22,
				'action_experience' => 40,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			214 =>
			array (
				'action_id' => 215,
				'action_skill' => 'Crafting',
				'action_name' => 'Sapphire Necklace',
				'action_level' => 23,
				'action_experience' => 55,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			215 =>
			array (
				'action_id' => 216,
				'action_skill' => 'Crafting',
				'action_name' => 'Sapphire Bracelet',
				'action_level' => 23,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			216 =>
			array (
				'action_id' => 217,
				'action_skill' => 'Crafting',
				'action_name' => 'Tiara',
				'action_level' => 24,
				'action_experience' => 53,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			217 =>
			array (
				'action_id' => 218,
				'action_skill' => 'Crafting',
				'action_name' => 'Sapphire Amulet',
				'action_level' => 25,
				'action_experience' => 65,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			218 =>
			array (
				'action_id' => 219,
				'action_skill' => 'Crafting',
				'action_name' => 'Pot Lid',
				'action_level' => 27,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Material',
			),
			219 =>
			array (
				'action_id' => 220,
				'action_skill' => 'Crafting',
				'action_name' => 'Emerald',
				'action_level' => 27,
				'action_experience' => 68,
				'action_members' => 0,
				'action_category' => 'Gem',
			),
			220 =>
			array (
				'action_id' => 221,
				'action_skill' => 'Crafting',
				'action_name' => 'Emerald Ring',
				'action_level' => 28,
				'action_experience' => 55,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			221 =>
			array (
				'action_id' => 222,
				'action_skill' => 'Crafting',
				'action_name' => 'Harld Leather Body',
				'action_level' => 29,
				'action_experience' => 35,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			222 =>
			array (
				'action_id' => 223,
				'action_skill' => 'Crafting',
				'action_name' => 'Emerald Necklace',
				'action_level' => 30,
				'action_experience' => 60,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			223 =>
			array (
				'action_id' => 224,
				'action_skill' => 'Crafting',
				'action_name' => 'Emerald Amulet',
				'action_level' => 30,
				'action_experience' => 70,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			224 =>
			array (
				'action_id' => 225,
				'action_skill' => 'Crafting',
				'action_name' => 'Emerald Bracelet',
				'action_level' => 33,
				'action_experience' => 65,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			225 =>
			array (
				'action_id' => 226,
				'action_skill' => 'Crafting',
				'action_name' => 'Glass Vial',
				'action_level' => 34,
				'action_experience' => 35,
				'action_members' => 1,
				'action_category' => 'Material',
			),
			226 =>
			array (
				'action_id' => 227,
				'action_skill' => 'Crafting',
				'action_name' => 'Ruby',
				'action_level' => 34,
				'action_experience' => 85,
				'action_members' => 0,
				'action_category' => 'Gem',
			),
			227 =>
			array (
				'action_id' => 228,
				'action_skill' => 'Crafting',
				'action_name' => 'Ruby Ring',
				'action_level' => 38,
				'action_experience' => 70,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			228 =>
			array (
				'action_id' => 229,
				'action_skill' => 'Crafting',
				'action_name' => 'Coif',
				'action_level' => 40,
				'action_experience' => 37,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			229 =>
			array (
				'action_id' => 230,
				'action_skill' => 'Crafting',
				'action_name' => 'Ruby Necklace',
				'action_level' => 41,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			230 =>
			array (
				'action_id' => 231,
				'action_skill' => 'Crafting',
				'action_name' => 'Studded Body',
				'action_level' => 42,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			231 =>
			array (
				'action_id' => 232,
				'action_skill' => 'Crafting',
				'action_name' => 'Ruby Bracelet',
				'action_level' => 43,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			232 =>
			array (
				'action_id' => 233,
				'action_skill' => 'Crafting',
				'action_name' => 'Diamond',
				'action_level' => 43,
				'action_experience' => 108,
				'action_members' => 0,
				'action_category' => 'Gem',
			),
			233 =>
			array (
				'action_id' => 234,
				'action_skill' => 'Crafting',
				'action_name' => 'Diamond Ring',
				'action_level' => 43,
				'action_experience' => 85,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			234 =>
			array (
				'action_id' => 235,
				'action_skill' => 'Crafting',
				'action_name' => 'Silver Bolt',
				'action_level' => 43,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			235 =>
			array (
				'action_id' => 236,
				'action_skill' => 'Crafting',
				'action_name' => 'Yak-Hide Legs',
				'action_level' => 43,
				'action_experience' => 32,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			236 =>
			array (
				'action_id' => 237,
				'action_skill' => 'Crafting',
				'action_name' => 'Studded Chaps',
				'action_level' => 44,
				'action_experience' => 42,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			237 =>
			array (
				'action_id' => 238,
				'action_skill' => 'Crafting',
				'action_name' => 'Snakeskin Boots',
				'action_level' => 45,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			238 =>
			array (
				'action_id' => 239,
				'action_skill' => 'Crafting',
				'action_name' => 'Glass Orb',
				'action_level' => 46,
				'action_experience' => 53,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			239 =>
			array (
				'action_id' => 240,
				'action_skill' => 'Crafting',
				'action_name' => 'Snakeskin Vambraces',
				'action_level' => 47,
				'action_experience' => 35,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			240 =>
			array (
				'action_id' => 241,
				'action_skill' => 'Crafting',
				'action_name' => 'Snakeskin Bandana',
				'action_level' => 48,
				'action_experience' => 45,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			241 =>
			array (
				'action_id' => 242,
				'action_skill' => 'Crafting',
				'action_name' => 'Ruby Amulet',
				'action_level' => 50,
				'action_experience' => 85,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			242 =>
			array (
				'action_id' => 243,
				'action_skill' => 'Crafting',
				'action_name' => 'Snakeskin Chaps',
				'action_level' => 51,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			243 =>
			array (
				'action_id' => 244,
				'action_skill' => 'Crafting',
				'action_name' => 'Snakeskin Body',
				'action_level' => 53,
				'action_experience' => 55,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			244 =>
			array (
				'action_id' => 245,
				'action_skill' => 'Crafting',
				'action_name' => 'Water Battlestaff',
				'action_level' => 54,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			245 =>
			array (
				'action_id' => 246,
				'action_skill' => 'Crafting',
				'action_name' => 'Dragonstone',
				'action_level' => 55,
				'action_experience' => 138,
				'action_members' => 1,
				'action_category' => 'Gem',
			),
			246 =>
			array (
				'action_id' => 247,
				'action_skill' => 'Crafting',
				'action_name' => 'Dragonstone Ring',
				'action_level' => 55,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			247 =>
			array (
				'action_id' => 248,
				'action_skill' => 'Crafting',
				'action_name' => 'Diamond Necklace',
				'action_level' => 56,
				'action_experience' => 90,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			248 =>
			array (
				'action_id' => 249,
				'action_skill' => 'Crafting',
				'action_name' => 'Green D\'hide Vambraces',
				'action_level' => 57,
				'action_experience' => 62,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			249 =>
			array (
				'action_id' => 250,
				'action_skill' => 'Crafting',
				'action_name' => 'Diamond Bracelet',
				'action_level' => 58,
				'action_experience' => 95,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			250 =>
			array (
				'action_id' => 251,
				'action_skill' => 'Crafting',
				'action_name' => 'Earth Batllestaff',
				'action_level' => 58,
				'action_experience' => 113,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			251 =>
			array (
				'action_id' => 252,
				'action_skill' => 'Crafting',
				'action_name' => 'Green D\'hide Chaps',
				'action_level' => 60,
				'action_experience' => 124,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			252 =>
			array (
				'action_id' => 253,
				'action_skill' => 'Crafting',
				'action_name' => 'Fire Battlestaff',
				'action_level' => 62,
				'action_experience' => 125,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			253 =>
			array (
				'action_id' => 254,
				'action_skill' => 'Crafting',
				'action_name' => 'Green D\'hide Body',
				'action_level' => 63,
				'action_experience' => 186,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			254 =>
			array (
				'action_id' => 255,
				'action_skill' => 'Crafting',
				'action_name' => 'Air Battlestaff',
				'action_level' => 66,
				'action_experience' => 138,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			255 =>
			array (
				'action_id' => 256,
				'action_skill' => 'Crafting',
				'action_name' => 'Blue D\'hide Vambraces',
				'action_level' => 66,
				'action_experience' => 70,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			256 =>
			array (
				'action_id' => 257,
				'action_skill' => 'Crafting',
				'action_name' => 'Onyx',
				'action_level' => 67,
				'action_experience' => 168,
				'action_members' => 1,
				'action_category' => 'Gem',
			),
			257 =>
			array (
				'action_id' => 258,
				'action_skill' => 'Crafting',
				'action_name' => 'Onyx Ring',
				'action_level' => 67,
				'action_experience' => 115,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			258 =>
			array (
				'action_id' => 259,
				'action_skill' => 'Crafting',
				'action_name' => 'Blue D\'hide Chaps',
				'action_level' => 68,
				'action_experience' => 140,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			259 =>
			array (
				'action_id' => 260,
				'action_skill' => 'Crafting',
				'action_name' => 'Diamond Amulet',
				'action_level' => 70,
				'action_experience' => 100,
				'action_members' => 0,
				'action_category' => 'Equipment',
			),
			260 =>
			array (
				'action_id' => 261,
				'action_skill' => 'Crafting',
				'action_name' => 'Blue D\'hide Body',
				'action_level' => 71,
				'action_experience' => 210,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			261 =>
			array (
				'action_id' => 262,
				'action_skill' => 'Crafting',
				'action_name' => 'Draonstone Necklace',
				'action_level' => 72,
				'action_experience' => 105,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			262 =>
			array (
				'action_id' => 263,
				'action_skill' => 'Crafting',
				'action_name' => 'Red D\'hide Vambraces',
				'action_level' => 73,
				'action_experience' => 78,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			263 =>
			array (
				'action_id' => 264,
				'action_skill' => 'Crafting',
				'action_name' => 'Dragonstone Bracelet',
				'action_level' => 74,
				'action_experience' => 110,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			264 =>
			array (
				'action_id' => 265,
				'action_skill' => 'Crafting',
				'action_name' => 'Red D\'hide Chaps',
				'action_level' => 75,
				'action_experience' => 156,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			265 =>
			array (
				'action_id' => 266,
				'action_skill' => 'Crafting',
				'action_name' => 'Red D\'hide Body',
				'action_level' => 77,
				'action_experience' => 234,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			266 =>
			array (
				'action_id' => 267,
				'action_skill' => 'Crafting',
				'action_name' => 'Black D\'hide Vambraces',
				'action_level' => 79,
				'action_experience' => 86,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			267 =>
			array (
				'action_id' => 268,
				'action_skill' => 'Crafting',
				'action_name' => 'Dragonstone Amulet',
				'action_level' => 80,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			268 =>
			array (
				'action_id' => 269,
				'action_skill' => 'Crafting',
				'action_name' => 'Black D\'hide Chaps',
				'action_level' => 82,
				'action_experience' => 172,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			269 =>
			array (
				'action_id' => 270,
				'action_skill' => 'Crafting',
				'action_name' => 'Onyx Necklace',
				'action_level' => 82,
				'action_experience' => 120,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			270 =>
			array (
				'action_id' => 271,
				'action_skill' => 'Crafting',
				'action_name' => 'Black D\'hide Body',
				'action_level' => 84,
				'action_experience' => 258,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			271 =>
			array (
				'action_id' => 272,
				'action_skill' => 'Crafting',
				'action_name' => 'Onyx Bracelet',
				'action_level' => 84,
				'action_experience' => 125,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			272 =>
			array (
				'action_id' => 273,
				'action_skill' => 'Crafting',
				'action_name' => 'Dorgeshuun Light Orb',
				'action_level' => 87,
				'action_experience' => 70,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			273 =>
			array (
				'action_id' => 274,
				'action_skill' => 'Crafting',
				'action_name' => 'Dorgeshuun Light Orb (Filament)',
				'action_level' => 87,
				'action_experience' => 174,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			274 =>
			array (
				'action_id' => 275,
				'action_skill' => 'Crafting',
				'action_name' => 'Onyx Amulet',
				'action_level' => 90,
				'action_experience' => 165,
				'action_members' => 1,
				'action_category' => 'Equipment',
			),
			275 =>
			array (
				'action_id' => 276,
				'action_skill' => 'Farming',
				'action_name' => 'Potato',
				'action_level' => 1,
				'action_experience' => 17,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			276 =>
			array (
				'action_id' => 277,
				'action_skill' => 'Farming',
				'action_name' => 'Marigold',
				'action_level' => 2,
				'action_experience' => 56,
				'action_members' => 1,
				'action_category' => 'Flower',
			),
			277 =>
			array (
				'action_id' => 278,
				'action_skill' => 'Farming',
				'action_name' => 'Barley',
				'action_level' => 3,
				'action_experience' => 18,
				'action_members' => 1,
				'action_category' => 'Hops',
			),
			278 =>
			array (
				'action_id' => 279,
				'action_skill' => 'Farming',
				'action_name' => 'Hammerstone Hops',
				'action_level' => 4,
				'action_experience' => 19,
				'action_members' => 1,
				'action_category' => 'Hops',
			),
			279 =>
			array (
				'action_id' => 280,
				'action_skill' => 'Farming',
				'action_name' => 'Onion',
				'action_level' => 5,
				'action_experience' => 20,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			280 =>
			array (
				'action_id' => 281,
				'action_skill' => 'Farming',
				'action_name' => 'Cabbage',
				'action_level' => 7,
				'action_experience' => 22,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			281 =>
			array (
				'action_id' => 282,
				'action_skill' => 'Farming',
				'action_name' => 'Asgarnian Hops',
				'action_level' => 8,
				'action_experience' => 23,
				'action_members' => 1,
				'action_category' => 'Hops',
			),
			282 =>
			array (
				'action_id' => 283,
				'action_skill' => 'Farming',
				'action_name' => 'Guam',
				'action_level' => 9,
				'action_experience' => 24,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			283 =>
			array (
				'action_id' => 284,
				'action_skill' => 'Farming',
				'action_name' => 'Redberry Bush',
				'action_level' => 10,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			284 =>
			array (
				'action_id' => 285,
				'action_skill' => 'Farming',
				'action_name' => 'Rosemary',
				'action_level' => 11,
				'action_experience' => 79,
				'action_members' => 1,
				'action_category' => 'Flower',
			),
			285 =>
			array (
				'action_id' => 286,
				'action_skill' => 'Farming',
				'action_name' => 'Tomato',
				'action_level' => 12,
				'action_experience' => 27,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			286 =>
			array (
				'action_id' => 287,
				'action_skill' => 'Farming',
				'action_name' => 'Jute',
				'action_level' => 13,
				'action_experience' => 28,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			287 =>
			array (
				'action_id' => 288,
				'action_skill' => 'Farming',
				'action_name' => 'Marrentill',
				'action_level' => 14,
				'action_experience' => 29,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			288 =>
			array (
				'action_id' => 289,
				'action_skill' => 'Farming',
				'action_name' => 'Oak Tree',
				'action_level' => 15,
				'action_experience' => 481,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			289 =>
			array (
				'action_id' => 290,
				'action_skill' => 'Farming',
				'action_name' => 'Yanillian Hops',
				'action_level' => 16,
				'action_experience' => 31,
				'action_members' => 1,
				'action_category' => 'Hops',
			),
			290 =>
			array (
				'action_id' => 291,
				'action_skill' => 'Farming',
				'action_name' => 'Tarromin',
				'action_level' => 19,
				'action_experience' => 34,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			291 =>
			array (
				'action_id' => 292,
				'action_skill' => 'Farming',
				'action_name' => 'Sweetcorn',
				'action_level' => 20,
				'action_experience' => 36,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			292 =>
			array (
				'action_id' => 293,
				'action_skill' => 'Farming',
				'action_name' => 'Krandorian Hops',
				'action_level' => 21,
				'action_experience' => 37,
				'action_members' => 1,
				'action_category' => 'Hops',
			),
			293 =>
			array (
				'action_id' => 294,
				'action_skill' => 'Farming',
				'action_name' => 'Cadavaberry Bush',
				'action_level' => 22,
				'action_experience' => 128,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			294 =>
			array (
				'action_id' => 295,
				'action_skill' => 'Farming',
				'action_name' => 'Nasturtium',
				'action_level' => 24,
				'action_experience' => 131,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			295 =>
			array (
				'action_id' => 296,
				'action_skill' => 'Farming',
				'action_name' => 'Woad',
				'action_level' => 25,
				'action_experience' => 136,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			296 =>
			array (
				'action_id' => 297,
				'action_skill' => 'Farming',
				'action_name' => 'Harralander',
				'action_level' => 26,
				'action_experience' => 46,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			297 =>
			array (
				'action_id' => 298,
				'action_skill' => 'Farming',
				'action_name' => 'Limpwurt',
				'action_level' => 26,
				'action_experience' => 142,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			298 =>
			array (
				'action_id' => 299,
				'action_skill' => 'Farming',
				'action_name' => 'Apple Tree',
				'action_level' => 27,
				'action_experience' => 1230,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			299 =>
			array (
				'action_id' => 300,
				'action_skill' => 'Farming',
				'action_name' => 'Wildblood Hops',
				'action_level' => 28,
				'action_experience' => 49,
				'action_members' => 1,
				'action_category' => 'Hops',
			),
			300 =>
			array (
				'action_id' => 301,
				'action_skill' => 'Farming',
				'action_name' => 'Goutweed',
				'action_level' => 29,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			301 =>
			array (
				'action_id' => 302,
				'action_skill' => 'Farming',
				'action_name' => 'Willow Tree',
				'action_level' => 30,
				'action_experience' => 1481,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			302 =>
			array (
				'action_id' => 303,
				'action_skill' => 'Farming',
				'action_name' => 'Strawberry',
				'action_level' => 31,
				'action_experience' => 55,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			303 =>
			array (
				'action_id' => 304,
				'action_skill' => 'Farming',
				'action_name' => 'Ranarr',
				'action_level' => 32,
				'action_experience' => 58,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			304 =>
			array (
				'action_id' => 305,
				'action_skill' => 'Farming',
				'action_name' => 'Banana Tree',
				'action_level' => 33,
				'action_experience' => 1789,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			305 =>
			array (
				'action_id' => 306,
				'action_skill' => 'Farming',
				'action_name' => 'Dwellberry Bush',
				'action_level' => 36,
				'action_experience' => 161,
				'action_members' => 1,
				'action_category' => 'Bush',
			),
			306 =>
			array (
				'action_id' => 307,
				'action_skill' => 'Farming',
				'action_name' => 'Spirit Weed',
				'action_level' => 36,
				'action_experience' => 68,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			307 =>
			array (
				'action_id' => 308,
				'action_skill' => 'Farming',
				'action_name' => 'Toadflax',
				'action_level' => 38,
				'action_experience' => 73,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			308 =>
			array (
				'action_id' => 309,
				'action_skill' => 'Farming',
				'action_name' => 'Orange Tree',
				'action_level' => 39,
				'action_experience' => 2519,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			309 =>
			array (
				'action_id' => 310,
				'action_skill' => 'Farming',
				'action_name' => 'Curry Tree',
				'action_level' => 42,
				'action_experience' => 2962,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			310 =>
			array (
				'action_id' => 311,
				'action_skill' => 'Farming',
				'action_name' => 'Evil Turnip',
				'action_level' => 42,
				'action_experience' => 87,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			311 =>
			array (
				'action_id' => 312,
				'action_skill' => 'Farming',
				'action_name' => 'Irit',
				'action_level' => 44,
				'action_experience' => 92,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			312 =>
			array (
				'action_id' => 313,
				'action_skill' => 'Farming',
				'action_name' => 'Maple Tree',
				'action_level' => 45,
				'action_experience' => 3448,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			313 =>
			array (
				'action_id' => 314,
				'action_skill' => 'Farming',
				'action_name' => 'Watermelon',
				'action_level' => 47,
				'action_experience' => 103,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			314 =>
			array (
				'action_id' => 315,
				'action_skill' => 'Farming',
				'action_name' => 'Jangerberry Bush',
				'action_level' => 48,
				'action_experience' => 354,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			315 =>
			array (
				'action_id' => 316,
				'action_skill' => 'Farming',
				'action_name' => 'Avantoe',
				'action_level' => 50,
				'action_experience' => 116,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			316 =>
			array (
				'action_id' => 317,
				'action_skill' => 'Farming',
				'action_name' => 'Pineapple Tree',
				'action_level' => 51,
				'action_experience' => 4684,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			317 =>
			array (
				'action_id' => 318,
				'action_skill' => 'Farming',
				'action_name' => 'White Lily',
				'action_level' => 52,
				'action_experience' => 300,
				'action_members' => 1,
				'action_category' => 'Flower',
			),
			318 =>
			array (
				'action_id' => 319,
				'action_skill' => 'Farming',
				'action_name' => 'Bittercap Mushroom',
				'action_level' => 53,
				'action_experience' => 119,
				'action_members' => 1,
				'action_category' => 'Vegetable',
			),
			319 =>
			array (
				'action_id' => 320,
				'action_skill' => 'Farming',
				'action_name' => 'Jade Vine',
				'action_level' => 55,
				'action_experience' => 1550,
				'action_members' => 1,
				'action_category' => 'Bush',
			),
			320 =>
			array (
				'action_id' => 321,
				'action_skill' => 'Farming',
				'action_name' => 'Cactus',
				'action_level' => 55,
				'action_experience' => 466,
				'action_members' => 1,
				'action_category' => 'Bush',
			),
			321 =>
			array (
				'action_id' => 322,
				'action_skill' => 'Farming',
				'action_name' => 'Kwuarm',
				'action_level' => 56,
				'action_experience' => 147,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			322 =>
			array (
				'action_id' => 323,
				'action_skill' => 'Farming',
				'action_name' => 'Papaya Tree',
				'action_level' => 57,
				'action_experience' => 6245,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			323 =>
			array (
				'action_id' => 324,
				'action_skill' => 'Farming',
				'action_name' => 'Whiteberry Bush',
				'action_level' => 59,
				'action_experience' => 545,
				'action_members' => 1,
				'action_category' => 'Bush',
			),
			324 =>
			array (
				'action_id' => 325,
				'action_skill' => 'Farming',
				'action_name' => 'Yew Tree',
				'action_level' => 60,
				'action_experience' => 7151,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			325 =>
			array (
				'action_id' => 326,
				'action_skill' => 'Farming',
				'action_name' => 'Snapdragon',
				'action_level' => 62,
				'action_experience' => 186,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			326 =>
			array (
				'action_id' => 327,
				'action_skill' => 'Farming',
				'action_name' => 'Belladonna',
				'action_level' => 63,
				'action_experience' => 603,
				'action_members' => 1,
				'action_category' => 'Flower',
			),
			327 =>
			array (
				'action_id' => 328,
				'action_skill' => 'Farming',
				'action_name' => 'Cadantine',
				'action_level' => 67,
				'action_experience' => 227,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			328 =>
			array (
				'action_id' => 329,
				'action_skill' => 'Farming',
				'action_name' => 'Palm Tree',
				'action_level' => 68,
				'action_experience' => 10302,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			329 =>
			array (
				'action_id' => 330,
				'action_skill' => 'Farming',
				'action_name' => 'Poison Ivy Bush',
				'action_level' => 70,
				'action_experience' => 839,
				'action_members' => 1,
				'action_category' => 'Bush',
			),
			330 =>
			array (
				'action_id' => 331,
				'action_skill' => 'Farming',
				'action_name' => 'Calquat Tree',
				'action_level' => 72,
				'action_experience' => 12274,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			331 =>
			array (
				'action_id' => 332,
				'action_skill' => 'Farming',
				'action_name' => 'Lantadyme',
				'action_level' => 73,
				'action_experience' => 286,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			332 =>
			array (
				'action_id' => 333,
				'action_skill' => 'Farming',
				'action_name' => 'Magic Tree',
				'action_level' => 75,
				'action_experience' => 13914,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			333 =>
			array (
				'action_id' => 334,
				'action_skill' => 'Farming',
				'action_name' => 'Dwarf Weed',
				'action_level' => 79,
				'action_experience' => 363,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			334 =>
			array (
				'action_id' => 335,
				'action_skill' => 'Farming',
				'action_name' => 'Spirit Tree',
				'action_level' => 83,
				'action_experience' => 19501,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			335 =>
			array (
				'action_id' => 336,
				'action_skill' => 'Farming',
				'action_name' => 'Torstol',
				'action_level' => 85,
				'action_experience' => 344,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			336 =>
			array (
				'action_id' => 337,
				'action_skill' => 'Firemaking',
				'action_name' => 'Logs',
				'action_level' => 1,
				'action_experience' => 40,
				'action_members' => 0,
				'action_category' => 'Logs',
			),
			337 =>
			array (
				'action_id' => 338,
				'action_skill' => 'Firemaking',
				'action_name' => 'Achey Logs',
				'action_level' => 1,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			338 =>
			array (
				'action_id' => 339,
				'action_skill' => 'Firemaking',
				'action_name' => 'Pyre Logs',
				'action_level' => 5,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			339 =>
			array (
				'action_id' => 340,
				'action_skill' => 'Firemaking',
				'action_name' => 'Oak Logs',
				'action_level' => 15,
				'action_experience' => 60,
				'action_members' => 0,
				'action_category' => 'Logs',
			),
			340 =>
			array (
				'action_id' => 341,
				'action_skill' => 'Firemaking',
				'action_name' => 'Oak Pyre Logs',
				'action_level' => 20,
				'action_experience' => 70,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			341 =>
			array (
				'action_id' => 342,
				'action_skill' => 'Firemaking',
				'action_name' => 'Willow Logs',
				'action_level' => 30,
				'action_experience' => 90,
				'action_members' => 0,
				'action_category' => 'Logs',
			),
			342 =>
			array (
				'action_id' => 343,
				'action_skill' => 'Firemaking',
				'action_name' => 'Teak Logs',
				'action_level' => 35,
				'action_experience' => 105,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			343 =>
			array (
				'action_id' => 344,
				'action_skill' => 'Firemaking',
				'action_name' => 'Willow Pyre Logs',
				'action_level' => 35,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			344 =>
			array (
				'action_id' => 345,
				'action_skill' => 'Firemaking',
				'action_name' => 'Teak Pyre Logs',
				'action_level' => 40,
				'action_experience' => 120,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			345 =>
			array (
				'action_id' => 346,
				'action_skill' => 'Firemaking',
				'action_name' => 'Arctic Pine Logs',
				'action_level' => 42,
				'action_experience' => 125,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			346 =>
			array (
				'action_id' => 347,
				'action_skill' => 'Firemaking',
				'action_name' => 'Maple Logs',
				'action_level' => 45,
				'action_experience' => 135,
				'action_members' => 0,
				'action_category' => 'Logs',
			),
			347 =>
			array (
				'action_id' => 348,
				'action_skill' => 'Firemaking',
				'action_name' => 'Arctic Pine Pyre Logs',
				'action_level' => 47,
				'action_experience' => 158,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			348 =>
			array (
				'action_id' => 349,
				'action_skill' => 'Firemaking',
				'action_name' => 'Mahogany Logs',
				'action_level' => 50,
				'action_experience' => 158,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			349 =>
			array (
				'action_id' => 350,
				'action_skill' => 'Firemaking',
				'action_name' => 'Maple Pyre Logs',
				'action_level' => 50,
				'action_experience' => 175,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			350 =>
			array (
				'action_id' => 351,
				'action_skill' => 'Firemaking',
				'action_name' => 'Mahogany Pyre Logs',
				'action_level' => 55,
				'action_experience' => 210,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			351 =>
			array (
				'action_id' => 352,
				'action_skill' => 'Firemaking',
				'action_name' => 'Eucalyptus Logs',
				'action_level' => 58,
				'action_experience' => 194,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			352 =>
			array (
				'action_id' => 353,
				'action_skill' => 'Firemaking',
				'action_name' => 'Yew Logs',
				'action_level' => 60,
				'action_experience' => 203,
				'action_members' => 0,
				'action_category' => 'Logs',
			),
			353 =>
			array (
				'action_id' => 354,
				'action_skill' => 'Firemaking',
				'action_name' => 'Eucalyptus Pyre Logs',
				'action_level' => 63,
				'action_experience' => 246,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			354 =>
			array (
				'action_id' => 355,
				'action_skill' => 'Firemaking',
				'action_name' => 'Yew Pyre Logs',
				'action_level' => 65,
				'action_experience' => 255,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			355 =>
			array (
				'action_id' => 356,
				'action_skill' => 'Firemaking',
				'action_name' => 'Cursed Magic Logs',
				'action_level' => 75,
				'action_experience' => 303,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			356 =>
			array (
				'action_id' => 357,
				'action_skill' => 'Firemaking',
				'action_name' => 'Magic Logs',
				'action_level' => 75,
				'action_experience' => 304,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			357 =>
			array (
				'action_id' => 358,
				'action_skill' => 'Firemaking',
				'action_name' => 'Magic Pyre Logs',
				'action_level' => 80,
				'action_experience' => 405,
				'action_members' => 1,
				'action_category' => 'Logs',
			),
			358 =>
			array (
				'action_id' => 359,
				'action_skill' => 'Fletching',
				'action_name' => '15x Arrow Shafts',
				'action_level' => 1,
				'action_experience' => 5,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			359 =>
			array (
				'action_id' => 360,
				'action_skill' => 'Fletching',
				'action_name' => 'Bronze Dart',
				'action_level' => 1,
				'action_experience' => 2,
				'action_members' => 1,
				'action_category' => 'Dart',
			),
			360 =>
			array (
				'action_id' => 361,
				'action_skill' => 'Fletching',
				'action_name' => 'Headless Arrow',
				'action_level' => 1,
				'action_experience' => 1,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			361 =>
			array (
				'action_id' => 362,
				'action_skill' => 'Fletching',
				'action_name' => 'Ogre Arrow Shafts',
				'action_level' => 5,
				'action_experience' => 2,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			362 =>
			array (
				'action_id' => 363,
				'action_skill' => 'Fletching',
				'action_name' => 'Flighted Ogre Arrows',
				'action_level' => 5,
				'action_experience' => 1,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			363 =>
			array (
				'action_id' => 364,
				'action_skill' => 'Fletching',
				'action_name' => 'Wolfbone Tips',
				'action_level' => 5,
				'action_experience' => 3,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			364 =>
			array (
				'action_id' => 365,
				'action_skill' => 'Fletching',
				'action_name' => 'Ogre Arrows',
				'action_level' => 5,
				'action_experience' => 1,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			365 =>
			array (
				'action_id' => 366,
				'action_skill' => 'Fletching',
				'action_name' => 'Bronze Arrow',
				'action_level' => 5,
				'action_experience' => 1,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			366 =>
			array (
				'action_id' => 367,
				'action_skill' => 'Fletching',
				'action_name' => 'Shortbow',
				'action_level' => 5,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			367 =>
			array (
				'action_id' => 368,
				'action_skill' => 'Fletching',
				'action_name' => 'Bronze Brutal Arrow',
				'action_level' => 7,
				'action_experience' => 1,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			368 =>
			array (
				'action_id' => 369,
				'action_skill' => 'Fletching',
				'action_name' => 'Bronze Bolt',
				'action_level' => 9,
				'action_experience' => 1,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			369 =>
			array (
				'action_id' => 370,
				'action_skill' => 'Fletching',
				'action_name' => 'Bronze Crossbow',
				'action_level' => 9,
				'action_experience' => 24,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			370 =>
			array (
				'action_id' => 371,
				'action_skill' => 'Fletching',
				'action_name' => 'Longbow',
				'action_level' => 10,
				'action_experience' => 20,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			371 =>
			array (
				'action_id' => 372,
				'action_skill' => 'Fletching',
				'action_name' => 'Iron Arrow',
				'action_level' => 15,
				'action_experience' => 3,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			372 =>
			array (
				'action_id' => 373,
				'action_skill' => 'Fletching',
				'action_name' => 'Opal Tipped Bolts (12)',
				'action_level' => 11,
				'action_experience' => 3,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			373 =>
			array (
				'action_id' => 374,
				'action_skill' => 'Fletching',
				'action_name' => 'Iron Brutal Arrow',
				'action_level' => 18,
				'action_experience' => 3,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			374 =>
			array (
				'action_id' => 375,
				'action_skill' => 'Fletching',
				'action_name' => 'Oak Shortbow',
				'action_level' => 20,
				'action_experience' => 33,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			375 =>
			array (
				'action_id' => 376,
				'action_skill' => 'Fletching',
				'action_name' => 'Iron Dart',
				'action_level' => 22,
				'action_experience' => 3,
				'action_members' => 1,
				'action_category' => 'Dart',
			),
			376 =>
			array (
				'action_id' => 377,
				'action_skill' => 'Fletching',
				'action_name' => 'Blurite Bolts',
				'action_level' => 24,
				'action_experience' => 1,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			377 =>
			array (
				'action_id' => 378,
				'action_skill' => 'Fletching',
				'action_name' => 'Blurite Crossbow',
				'action_level' => 24,
				'action_experience' => 64,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			378 =>
			array (
				'action_id' => 379,
				'action_skill' => 'Fletching',
				'action_name' => 'Jade Tipped Bolts (12)',
				'action_level' => 26,
				'action_experience' => 4,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			379 =>
			array (
				'action_id' => 380,
				'action_skill' => 'Fletching',
				'action_name' => 'Oak Longbow',
				'action_level' => 25,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			380 =>
			array (
				'action_id' => 381,
				'action_skill' => 'Fletching',
				'action_name' => 'Composite Ogre Bow',
				'action_level' => 30,
				'action_experience' => 90,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			381 =>
			array (
				'action_id' => 382,
				'action_skill' => 'Fletching',
				'action_name' => 'Steel Arrow',
				'action_level' => 30,
				'action_experience' => 5,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			382 =>
			array (
				'action_id' => 383,
				'action_skill' => 'Fletching',
				'action_name' => 'Kebbit-Tipped Hunting Bolt',
				'action_level' => 32,
				'action_experience' => 1,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			383 =>
			array (
				'action_id' => 384,
				'action_skill' => 'Fletching',
				'action_name' => 'Steel Brutal Arrow',
				'action_level' => 33,
				'action_experience' => 5,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			384 =>
			array (
				'action_id' => 385,
				'action_skill' => 'Fletching',
				'action_name' => 'Willow Shortbow',
				'action_level' => 35,
				'action_experience' => 66,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			385 =>
			array (
				'action_id' => 386,
				'action_skill' => 'Fletching',
				'action_name' => 'Steel Dart',
				'action_level' => 37,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'Dart',
			),
			386 =>
			array (
				'action_id' => 387,
				'action_skill' => 'Fletching',
				'action_name' => 'Black Brutal Arrow',
				'action_level' => 38,
				'action_experience' => 6,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			387 =>
			array (
				'action_id' => 388,
				'action_skill' => 'Fletching',
				'action_name' => 'Iron Bolt',
				'action_level' => 39,
				'action_experience' => 2,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			388 =>
			array (
				'action_id' => 389,
				'action_skill' => 'Fletching',
				'action_name' => 'Iron Crossbow',
				'action_level' => 39,
				'action_experience' => 88,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			389 =>
			array (
				'action_id' => 390,
				'action_skill' => 'Fletching',
				'action_name' => 'Willow Longbow',
				'action_level' => 40,
				'action_experience' => 83,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			390 =>
			array (
				'action_id' => 391,
				'action_skill' => 'Fletching',
				'action_name' => 'Pearl Tipped Bolts (6/24)',
				'action_level' => 41,
				'action_experience' => 6,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			391 =>
			array (
				'action_id' => 392,
				'action_skill' => 'Fletching',
				'action_name' => 'Long Kebbit-Tipped Hunting Bolt',
				'action_level' => 42,
				'action_experience' => 1,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			392 =>
			array (
				'action_id' => 393,
				'action_skill' => 'Fletching',
				'action_name' => 'Mithril Arrow',
				'action_level' => 45,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			393 =>
			array (
				'action_id' => 394,
				'action_skill' => 'Fletching',
				'action_name' => 'Steel Bolt',
				'action_level' => 46,
				'action_experience' => 4,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			394 =>
			array (
				'action_id' => 395,
				'action_skill' => 'Fletching',
				'action_name' => 'Steel Crossbow',
				'action_level' => 46,
				'action_experience' => 108,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			395 =>
			array (
				'action_id' => 396,
				'action_skill' => 'Fletching',
				'action_name' => 'Red Topaz Tipped Bolts (12)',
				'action_level' => 48,
				'action_experience' => 7,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			396 =>
			array (
				'action_id' => 397,
				'action_skill' => 'Fletching',
				'action_name' => 'Mithril Brutal Arrow',
				'action_level' => 49,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			397 =>
			array (
				'action_id' => 398,
				'action_skill' => 'Fletching',
				'action_name' => 'Maple Shortbow',
				'action_level' => 50,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			398 =>
			array (
				'action_id' => 399,
				'action_skill' => 'Fletching',
				'action_name' => 'Barbed Tipped Bolts',
				'action_level' => 51,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			399 =>
			array (
				'action_id' => 400,
				'action_skill' => 'Fletching',
				'action_name' => 'Broad Arrow',
				'action_level' => 52,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			400 =>
			array (
				'action_id' => 401,
				'action_skill' => 'Fletching',
				'action_name' => 'Mithril Dart',
				'action_level' => 52,
				'action_experience' => 11,
				'action_members' => 1,
				'action_category' => 'Dart',
			),
			401 =>
			array (
				'action_id' => 402,
				'action_skill' => 'Fletching',
				'action_name' => 'Mithril Bolt',
				'action_level' => 54,
				'action_experience' => 5,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			402 =>
			array (
				'action_id' => 403,
				'action_skill' => 'Fletching',
				'action_name' => 'Mithril Crossbow',
				'action_level' => 54,
				'action_experience' => 128,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			403 =>
			array (
				'action_id' => 404,
				'action_skill' => 'Fletching',
				'action_name' => 'Maple Longbow',
				'action_level' => 55,
				'action_experience' => 117,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			404 =>
			array (
				'action_id' => 405,
				'action_skill' => 'Fletching',
				'action_name' => 'Sapphire Tipped Bolts (12)',
				'action_level' => 56,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			405 =>
			array (
				'action_id' => 406,
				'action_skill' => 'Fletching',
				'action_name' => 'Emerald Tipped Bolts (12)',
				'action_level' => 58,
				'action_experience' => 11,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			406 =>
			array (
				'action_id' => 407,
				'action_skill' => 'Fletching',
				'action_name' => 'Mithril Grapple',
				'action_level' => 59,
				'action_experience' => 11,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			407 =>
			array (
				'action_id' => 408,
				'action_skill' => 'Fletching',
				'action_name' => 'Adamant Arrow',
				'action_level' => 60,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			408 =>
			array (
				'action_id' => 409,
				'action_skill' => 'Fletching',
				'action_name' => 'Adamant Crossbow',
				'action_level' => 61,
				'action_experience' => 164,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			409 =>
			array (
				'action_id' => 410,
				'action_skill' => 'Fletching',
				'action_name' => 'Adamantite Bolt',
				'action_level' => 61,
				'action_experience' => 7,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			410 =>
			array (
				'action_id' => 411,
				'action_skill' => 'Fletching',
				'action_name' => 'Adamant Brutal Arrow',
				'action_level' => 62,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			411 =>
			array (
				'action_id' => 412,
				'action_skill' => 'Fletching',
				'action_name' => 'Ruby Tipped Bolts (12)',
				'action_level' => 63,
				'action_experience' => 12,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			412 =>
			array (
				'action_id' => 413,
				'action_skill' => 'Fletching',
				'action_name' => 'Diamond Tipped Bolts (12)',
				'action_level' => 65,
				'action_experience' => 14,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			413 =>
			array (
				'action_id' => 414,
				'action_skill' => 'Fletching',
				'action_name' => 'Yew Shortbow',
				'action_level' => 65,
				'action_experience' => 135,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			414 =>
			array (
				'action_id' => 415,
				'action_skill' => 'Fletching',
				'action_name' => 'Adamant Dart',
				'action_level' => 67,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'Dart',
			),
			415 =>
			array (
				'action_id' => 416,
				'action_skill' => 'Fletching',
				'action_name' => 'Rune Crossbow',
				'action_level' => 69,
				'action_experience' => 200,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			416 =>
			array (
				'action_id' => 417,
				'action_skill' => 'Fletching',
				'action_name' => 'Runite Bolt',
				'action_level' => 69,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			417 =>
			array (
				'action_id' => 418,
				'action_skill' => 'Fletching',
				'action_name' => 'Yew Longbow',
				'action_level' => 70,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			418 =>
			array (
				'action_id' => 419,
				'action_skill' => 'Fletching',
				'action_name' => 'Dragonstone Tipped Bolts (12)',
				'action_level' => 71,
				'action_experience' => 16,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			419 =>
			array (
				'action_id' => 420,
				'action_skill' => 'Fletching',
				'action_name' => 'Onyx Tipped Bolts (24)',
				'action_level' => 73,
				'action_experience' => 18,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			420 =>
			array (
				'action_id' => 421,
				'action_skill' => 'Fletching',
				'action_name' => 'Rune Arrow',
				'action_level' => 75,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			421 =>
			array (
				'action_id' => 422,
				'action_skill' => 'Fletching',
				'action_name' => 'Rune Brutal Arrow',
				'action_level' => 77,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			422 =>
			array (
				'action_id' => 423,
				'action_skill' => 'Fletching',
				'action_name' => 'Magic Shortbow',
				'action_level' => 80,
				'action_experience' => 167,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			423 =>
			array (
				'action_id' => 424,
				'action_skill' => 'Fletching',
				'action_name' => 'Rune Dart',
				'action_level' => 81,
				'action_experience' => 19,
				'action_members' => 1,
				'action_category' => 'Dart',
			),
			424 =>
			array (
				'action_id' => 425,
				'action_skill' => 'Fletching',
				'action_name' => 'Magic Longbow',
				'action_level' => 85,
				'action_experience' => 183,
				'action_members' => 1,
				'action_category' => 'Bow',
			),
			425 =>
			array (
				'action_id' => 426,
				'action_skill' => 'Fletching',
				'action_name' => 'Dragon Arrow',
				'action_level' => 90,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'Arrow',
			),
			426 =>
			array (
				'action_id' => 427,
				'action_skill' => 'Fletching',
				'action_name' => 'Dragon Dart',
				'action_level' => 95,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Dart',
			),
			427 =>
			array (
				'action_id' => 428,
				'action_skill' => 'Herblore',
				'action_name' => 'Attack Potion',
				'action_level' => 3,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			428 =>
			array (
				'action_id' => 429,
				'action_skill' => 'Herblore',
				'action_name' => 'Guam Leaf',
				'action_level' => 3,
				'action_experience' => 3,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			429 =>
			array (
				'action_id' => 430,
				'action_skill' => 'Herblore',
				'action_name' => 'Attack Mix',
				'action_level' => 4,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			430 =>
			array (
				'action_id' => 431,
				'action_skill' => 'Herblore',
				'action_name' => 'Antipoison',
				'action_level' => 5,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			431 =>
			array (
				'action_id' => 432,
				'action_skill' => 'Herblore',
				'action_name' => 'Marrentill',
				'action_level' => 5,
				'action_experience' => 4,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			432 =>
			array (
				'action_id' => 433,
				'action_skill' => 'Herblore',
				'action_name' => 'Anti-Poison Mix',
				'action_level' => 6,
				'action_experience' => 12,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			433 =>
			array (
				'action_id' => 434,
				'action_skill' => 'Herblore',
				'action_name' => 'Relicym\'s Balm Potion',
				'action_level' => 8,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			434 =>
			array (
				'action_id' => 435,
				'action_skill' => 'Herblore',
				'action_name' => 'Relicym\'s Balm Mix',
				'action_level' => 9,
				'action_experience' => 14,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			435 =>
			array (
				'action_id' => 436,
				'action_skill' => 'Herblore',
				'action_name' => 'Tarromin',
				'action_level' => 11,
				'action_experience' => 5,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			436 =>
			array (
				'action_id' => 437,
				'action_skill' => 'Herblore',
				'action_name' => 'Strength Potion',
				'action_level' => 12,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			437 =>
			array (
				'action_id' => 438,
				'action_skill' => 'Herblore',
				'action_name' => 'Strength Mix',
				'action_level' => 14,
				'action_experience' => 17,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			438 =>
			array (
				'action_id' => 439,
				'action_skill' => 'Herblore',
				'action_name' => 'Serum 207',
				'action_level' => 15,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			439 =>
			array (
				'action_id' => 440,
				'action_skill' => 'Herblore',
				'action_name' => 'Guthix Rest Tea',
				'action_level' => 18,
				'action_experience' => 59,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			440 =>
			array (
				'action_id' => 441,
				'action_skill' => 'Herblore',
				'action_name' => 'Guam Tar',
				'action_level' => 19,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			441 =>
			array (
				'action_id' => 442,
				'action_skill' => 'Herblore',
				'action_name' => 'Harralander',
				'action_level' => 20,
				'action_experience' => 6,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			442 =>
			array (
				'action_id' => 443,
				'action_skill' => 'Herblore',
				'action_name' => 'Restore Potion',
				'action_level' => 22,
				'action_experience' => 63,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			443 =>
			array (
				'action_id' => 444,
				'action_skill' => 'Herblore',
				'action_name' => 'Guthix Balance Potion',
				'action_level' => 22,
				'action_experience' => 63,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			444 =>
			array (
				'action_id' => 445,
				'action_skill' => 'Herblore',
				'action_name' => 'Stat-Restore Mix',
				'action_level' => 24,
				'action_experience' => 21,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			445 =>
			array (
				'action_id' => 446,
				'action_skill' => 'Herblore',
				'action_name' => 'Blamish Oil Potion',
				'action_level' => 25,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			446 =>
			array (
				'action_id' => 447,
				'action_skill' => 'Herblore',
				'action_name' => 'Ranarr Weed',
				'action_level' => 25,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			447 =>
			array (
				'action_id' => 448,
				'action_skill' => 'Herblore',
				'action_name' => 'Energy Potion',
				'action_level' => 26,
				'action_experience' => 68,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			448 =>
			array (
				'action_id' => 449,
				'action_skill' => 'Herblore',
				'action_name' => 'Energy Mix',
				'action_level' => 29,
				'action_experience' => 23,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			449 =>
			array (
				'action_id' => 450,
				'action_skill' => 'Herblore',
				'action_name' => 'Defence Potion',
				'action_level' => 30,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			450 =>
			array (
				'action_id' => 451,
				'action_skill' => 'Herblore',
				'action_name' => 'Toadflax',
				'action_level' => 30,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			451 =>
			array (
				'action_id' => 452,
				'action_skill' => 'Herblore',
				'action_name' => 'Marrentill Tar',
				'action_level' => 31,
				'action_experience' => 43,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			452 =>
			array (
				'action_id' => 453,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Fishing Explosive',
				'action_level' => 31,
				'action_experience' => 55,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			453 =>
			array (
				'action_id' => 454,
				'action_skill' => 'Herblore',
				'action_name' => 'Defence Mix',
				'action_level' => 33,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			454 =>
			array (
				'action_id' => 455,
				'action_skill' => 'Herblore',
				'action_name' => 'Agility Potion',
				'action_level' => 34,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			455 =>
			array (
				'action_id' => 456,
				'action_skill' => 'Herblore',
				'action_name' => 'Spirit Weed',
				'action_level' => 35,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			456 =>
			array (
				'action_id' => 457,
				'action_skill' => 'Herblore',
				'action_name' => 'Combat Potion',
				'action_level' => 36,
				'action_experience' => 84,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			457 =>
			array (
				'action_id' => 458,
				'action_skill' => 'Herblore',
				'action_name' => 'Agility Mix',
				'action_level' => 37,
				'action_experience' => 27,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			458 =>
			array (
				'action_id' => 459,
				'action_skill' => 'Herblore',
				'action_name' => 'Prayer Potion',
				'action_level' => 38,
				'action_experience' => 88,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			459 =>
			array (
				'action_id' => 460,
				'action_skill' => 'Herblore',
				'action_name' => 'Tarromin Tar',
				'action_level' => 39,
				'action_experience' => 55,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			460 =>
			array (
				'action_id' => 461,
				'action_skill' => 'Herblore',
				'action_name' => 'Summoning Potion',
				'action_level' => 40,
				'action_experience' => 92,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			461 =>
			array (
				'action_id' => 462,
				'action_skill' => 'Herblore',
				'action_name' => 'Combat Mix',
				'action_level' => 40,
				'action_experience' => 28,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			462 =>
			array (
				'action_id' => 463,
				'action_skill' => 'Herblore',
				'action_name' => 'Irit Leaf',
				'action_level' => 40,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			463 =>
			array (
				'action_id' => 464,
				'action_skill' => 'Herblore',
				'action_name' => 'Wergali',
				'action_level' => 41,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			464 =>
			array (
				'action_id' => 465,
				'action_skill' => 'Herblore',
				'action_name' => 'Crafting Potion',
				'action_level' => 42,
				'action_experience' => 95,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			465 =>
			array (
				'action_id' => 466,
				'action_skill' => 'Herblore',
				'action_name' => 'Restore Prayer Mix',
				'action_level' => 42,
				'action_experience' => 29,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			466 =>
			array (
				'action_id' => 467,
				'action_skill' => 'Herblore',
				'action_name' => 'Harralander Tar',
				'action_level' => 44,
				'action_experience' => 73,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			467 =>
			array (
				'action_id' => 468,
				'action_skill' => 'Herblore',
				'action_name' => 'Harralander Tar',
				'action_level' => 44,
				'action_experience' => 73,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			468 =>
			array (
				'action_id' => 469,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Attack Potion',
				'action_level' => 45,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			469 =>
			array (
				'action_id' => 470,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Attack Mix',
				'action_level' => 47,
				'action_experience' => 33,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			470 =>
			array (
				'action_id' => 471,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Antipoison',
				'action_level' => 48,
				'action_experience' => 106,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			471 =>
			array (
				'action_id' => 472,
				'action_skill' => 'Herblore',
				'action_name' => 'Avantoe',
				'action_level' => 48,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			472 =>
			array (
				'action_id' => 473,
				'action_skill' => 'Herblore',
				'action_name' => 'Fishing Potion',
				'action_level' => 50,
				'action_experience' => 113,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			473 =>
			array (
				'action_id' => 474,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Antipoison Mix',
				'action_level' => 51,
				'action_experience' => 35,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			474 =>
			array (
				'action_id' => 475,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Energy Potion',
				'action_level' => 52,
				'action_experience' => 118,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			475 =>
			array (
				'action_id' => 476,
				'action_skill' => 'Herblore',
				'action_name' => 'Hunter Potion',
				'action_level' => 53,
				'action_experience' => 120,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			476 =>
			array (
				'action_id' => 477,
				'action_skill' => 'Herblore',
				'action_name' => 'Fishing Mix',
				'action_level' => 53,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			477 =>
			array (
				'action_id' => 478,
				'action_skill' => 'Herblore',
				'action_name' => 'Kwuarm',
				'action_level' => 54,
				'action_experience' => 11,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			478 =>
			array (
				'action_id' => 479,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Strength Potion',
				'action_level' => 55,
				'action_experience' => 125,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			479 =>
			array (
				'action_id' => 480,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Energy Mix',
				'action_level' => 56,
				'action_experience' => 39,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			480 =>
			array (
				'action_id' => 481,
				'action_skill' => 'Herblore',
				'action_name' => 'Magic Essence Potion',
				'action_level' => 57,
				'action_experience' => 130,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			481 =>
			array (
				'action_id' => 482,
				'action_skill' => 'Herblore',
				'action_name' => 'Fletching Potion',
				'action_level' => 58,
				'action_experience' => 132,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			482 =>
			array (
				'action_id' => 483,
				'action_skill' => 'Herblore',
				'action_name' => 'Hunter Mix',
				'action_level' => 58,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			483 =>
			array (
				'action_id' => 484,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Strength Mix',
				'action_level' => 59,
				'action_experience' => 42,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			484 =>
			array (
				'action_id' => 485,
				'action_skill' => 'Herblore',
				'action_name' => 'Snapdragon',
				'action_level' => 59,
				'action_experience' => 12,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			485 =>
			array (
				'action_id' => 486,
				'action_skill' => 'Herblore',
				'action_name' => 'Weapon Poison Potion',
				'action_level' => 60,
				'action_experience' => 138,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			486 =>
			array (
				'action_id' => 487,
				'action_skill' => 'Herblore',
				'action_name' => 'Magic Essence Mix',
				'action_level' => 61,
				'action_experience' => 43,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			487 =>
			array (
				'action_id' => 488,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Restore Potion',
				'action_level' => 63,
				'action_experience' => 143,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			488 =>
			array (
				'action_id' => 489,
				'action_skill' => 'Herblore',
				'action_name' => 'Sanfew Serum Potion',
				'action_level' => 65,
				'action_experience' => 160,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			489 =>
			array (
				'action_id' => 490,
				'action_skill' => 'Herblore',
				'action_name' => 'Cadantine',
				'action_level' => 65,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			490 =>
			array (
				'action_id' => 491,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Defence Potion',
				'action_level' => 66,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			491 =>
			array (
				'action_id' => 492,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Restore Mix',
				'action_level' => 67,
				'action_experience' => 48,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			492 =>
			array (
				'action_id' => 493,
				'action_skill' => 'Herblore',
				'action_name' => 'Lantadyme',
				'action_level' => 67,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			493 =>
			array (
				'action_id' => 494,
				'action_skill' => 'Herblore',
				'action_name' => 'Extra-Strong Antipoison',
				'action_level' => 68,
				'action_experience' => 155,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			494 =>
			array (
				'action_id' => 495,
				'action_skill' => 'Herblore',
				'action_name' => 'Anti-Fire Breath Potion',
				'action_level' => 69,
				'action_experience' => 158,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			495 =>
			array (
				'action_id' => 496,
				'action_skill' => 'Herblore',
				'action_name' => 'Dwarf Weed',
				'action_level' => 70,
				'action_experience' => 14,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			496 =>
			array (
				'action_id' => 497,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Defence Mix',
				'action_level' => 71,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			497 =>
			array (
				'action_id' => 498,
				'action_skill' => 'Herblore',
				'action_name' => 'Ranging Potion',
				'action_level' => 72,
				'action_experience' => 165,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			498 =>
			array (
				'action_id' => 499,
				'action_skill' => 'Herblore',
				'action_name' => 'Extra-Strong Weapon Poison',
				'action_level' => 73,
				'action_experience' => 165,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			499 =>
			array (
				'action_id' => 500,
				'action_skill' => 'Herblore',
				'action_name' => 'Extra Strong Antipoison Mix',
				'action_level' => 74,
				'action_experience' => 52,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			500 =>
			array (
				'action_id' => 501,
				'action_skill' => 'Herblore',
				'action_name' => 'Anti Fire-Breath Mix',
				'action_level' => 75,
				'action_experience' => 53,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			501 =>
			array (
				'action_id' => 502,
				'action_skill' => 'Herblore',
				'action_name' => 'Torstol',
				'action_level' => 75,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'Herb',
			),
			502 =>
			array (
				'action_id' => 503,
				'action_skill' => 'Herblore',
				'action_name' => 'Magic Potion',
				'action_level' => 76,
				'action_experience' => 173,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			503 =>
			array (
				'action_id' => 504,
				'action_skill' => 'Herblore',
				'action_name' => 'Zamorak Brew',
				'action_level' => 78,
				'action_experience' => 175,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			504 =>
			array (
				'action_id' => 505,
				'action_skill' => 'Herblore',
				'action_name' => 'Super-Strong Antipoison',
				'action_level' => 79,
				'action_experience' => 177,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			505 =>
			array (
				'action_id' => 506,
				'action_skill' => 'Herblore',
				'action_name' => 'Ranging Mix',
				'action_level' => 80,
				'action_experience' => 54,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			506 =>
			array (
				'action_id' => 507,
				'action_skill' => 'Herblore',
				'action_name' => 'Saradomin Brew',
				'action_level' => 81,
				'action_experience' => 180,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			507 =>
			array (
				'action_id' => 508,
				'action_skill' => 'Herblore',
				'action_name' => 'Super-Strong Weapon Poison',
				'action_level' => 82,
				'action_experience' => 190,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			508 =>
			array (
				'action_id' => 509,
				'action_skill' => 'Herblore',
				'action_name' => 'Magic Mix',
				'action_level' => 83,
				'action_experience' => 57,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			509 =>
			array (
				'action_id' => 510,
				'action_skill' => 'Herblore',
				'action_name' => 'Recover Special',
				'action_level' => 84,
				'action_experience' => 200,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			510 =>
			array (
				'action_id' => 511,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Antifire',
				'action_level' => 85,
				'action_experience' => 210,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			511 =>
			array (
				'action_id' => 512,
				'action_skill' => 'Herblore',
				'action_name' => 'Zamorak Mix',
				'action_level' => 85,
				'action_experience' => 58,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			512 =>
			array (
				'action_id' => 513,
				'action_skill' => 'Herblore',
				'action_name' => 'Extreme Attack',
				'action_level' => 88,
				'action_experience' => 220,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			513 =>
			array (
				'action_id' => 514,
				'action_skill' => 'Herblore',
				'action_name' => 'Extreme Strength',
				'action_level' => 89,
				'action_experience' => 230,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			514 =>
			array (
				'action_id' => 515,
				'action_skill' => 'Herblore',
				'action_name' => 'Extreme Defence',
				'action_level' => 90,
				'action_experience' => 240,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			515 =>
			array (
				'action_id' => 516,
				'action_skill' => 'Herblore',
				'action_name' => 'Extreme Magic',
				'action_level' => 91,
				'action_experience' => 250,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			516 =>
			array (
				'action_id' => 517,
				'action_skill' => 'Herblore',
				'action_name' => 'Extreme Ranging',
				'action_level' => 92,
				'action_experience' => 260,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			517 =>
			array (
				'action_id' => 518,
				'action_skill' => 'Herblore',
				'action_name' => 'Super Prayer',
				'action_level' => 94,
				'action_experience' => 270,
				'action_members' => 1,
				'action_category' => 'Potion',
			),
			518 =>
			array (
				'action_id' => 519,
				'action_skill' => 'Hunter',
				'action_name' => 'Crimson Swift',
				'action_level' => 1,
				'action_experience' => 34,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			519 =>
			array (
				'action_id' => 520,
				'action_skill' => 'Hunter',
				'action_name' => 'Polar Kebbit',
				'action_level' => 1,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			520 =>
			array (
				'action_id' => 521,
				'action_skill' => 'Hunter',
				'action_name' => 'Common Kebbit',
				'action_level' => 3,
				'action_experience' => 36,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			521 =>
			array (
				'action_id' => 522,
				'action_skill' => 'Hunter',
				'action_name' => 'Golden Warbler',
				'action_level' => 5,
				'action_experience' => 48,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			522 =>
			array (
				'action_id' => 523,
				'action_skill' => 'Hunter',
				'action_name' => 'Feldip Weasel',
				'action_level' => 7,
				'action_experience' => 48,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			523 =>
			array (
				'action_id' => 524,
				'action_skill' => 'Hunter',
				'action_name' => 'Copper Longtail',
				'action_level' => 9,
				'action_experience' => 62,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			524 =>
			array (
				'action_id' => 525,
				'action_skill' => 'Hunter',
				'action_name' => 'Cerulean Twitch',
				'action_level' => 11,
				'action_experience' => 65,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			525 =>
			array (
				'action_id' => 526,
				'action_skill' => 'Hunter',
				'action_name' => 'Desert Devils',
				'action_level' => 13,
				'action_experience' => 66,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			526 =>
			array (
				'action_id' => 527,
				'action_skill' => 'Hunter',
				'action_name' => 'Ruby Harvest',
				'action_level' => 15,
				'action_experience' => 24,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			527 =>
			array (
				'action_id' => 528,
				'action_skill' => 'Hunter',
				'action_name' => 'Baby Impling',
				'action_level' => 17,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			528 =>
			array (
				'action_id' => 529,
				'action_skill' => 'Hunter',
				'action_name' => 'Tropical Wagtail',
				'action_level' => 19,
				'action_experience' => 95,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			529 =>
			array (
				'action_id' => 530,
				'action_skill' => 'Hunter',
				'action_name' => 'Young Impling',
				'action_level' => 22,
				'action_experience' => 65,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			530 =>
			array (
				'action_id' => 531,
				'action_skill' => 'Hunter',
				'action_name' => 'Wild Kebbit',
				'action_level' => 23,
				'action_experience' => 128,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			531 =>
			array (
				'action_id' => 532,
				'action_skill' => 'Hunter',
				'action_name' => 'Sapphire Glaciali',
				'action_level' => 25,
				'action_experience' => 34,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			532 =>
			array (
				'action_id' => 533,
				'action_skill' => 'Hunter',
				'action_name' => 'Rabbit',
				'action_level' => 27,
				'action_experience' => 144,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			533 =>
			array (
				'action_id' => 534,
				'action_skill' => 'Hunter',
				'action_name' => 'Ferret',
				'action_level' => 27,
				'action_experience' => 115,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			534 =>
			array (
				'action_id' => 535,
				'action_skill' => 'Hunter',
				'action_name' => 'Gourmet Impling',
				'action_level' => 28,
				'action_experience' => 113,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			535 =>
			array (
				'action_id' => 536,
				'action_skill' => 'Hunter',
				'action_name' => 'Swamp Lizard',
				'action_level' => 29,
				'action_experience' => 152,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			536 =>
			array (
				'action_id' => 537,
				'action_skill' => 'Hunter',
				'action_name' => 'Spined Larupia',
				'action_level' => 31,
				'action_experience' => 180,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			537 =>
			array (
				'action_id' => 538,
				'action_skill' => 'Hunter',
				'action_name' => 'Barbtailed Kebbit',
				'action_level' => 33,
				'action_experience' => 168,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			538 =>
			array (
				'action_id' => 539,
				'action_skill' => 'Hunter',
				'action_name' => 'Snowy Knight',
				'action_level' => 35,
				'action_experience' => 44,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			539 =>
			array (
				'action_id' => 540,
				'action_skill' => 'Hunter',
				'action_name' => 'Earth Impling',
				'action_level' => 36,
				'action_experience' => 177,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			540 =>
			array (
				'action_id' => 541,
				'action_skill' => 'Hunter',
				'action_name' => 'Prickly Kebbit',
				'action_level' => 37,
				'action_experience' => 204,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			541 =>
			array (
				'action_id' => 542,
				'action_skill' => 'Hunter',
				'action_name' => 'Wimpy Bird',
				'action_level' => 39,
				'action_experience' => 167,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			542 =>
			array (
				'action_id' => 543,
				'action_skill' => 'Hunter',
				'action_name' => 'Horned Graahk',
				'action_level' => 41,
				'action_experience' => 240,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			543 =>
			array (
				'action_id' => 544,
				'action_skill' => 'Hunter',
				'action_name' => 'Essence Impling',
				'action_level' => 42,
				'action_experience' => 225,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			544 =>
			array (
				'action_id' => 545,
				'action_skill' => 'Hunter',
				'action_name' => 'Spotted Kebbit',
				'action_level' => 43,
				'action_experience' => 104,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			545 =>
			array (
				'action_id' => 546,
				'action_skill' => 'Hunter',
				'action_name' => 'Diseased Kebbit',
				'action_level' => 44,
				'action_experience' => 225,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			546 =>
			array (
				'action_id' => 547,
				'action_skill' => 'Hunter',
				'action_name' => 'Black Warlock',
				'action_level' => 45,
				'action_experience' => 54,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			547 =>
			array (
				'action_id' => 548,
				'action_skill' => 'Hunter',
				'action_name' => 'Penguin Tracking',
				'action_level' => 45,
				'action_experience' => 250,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			548 =>
			array (
				'action_id' => 549,
				'action_skill' => 'Hunter',
				'action_name' => 'Orange Salamander',
				'action_level' => 47,
				'action_experience' => 224,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			549 =>
			array (
				'action_id' => 550,
				'action_skill' => 'Hunter',
				'action_name' => 'Platypus',
				'action_level' => 48,
				'action_experience' => 205,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			550 =>
			array (
				'action_id' => 551,
				'action_skill' => 'Hunter',
				'action_name' => 'Razor-Backed Kebbit',
				'action_level' => 49,
				'action_experience' => 348,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			551 =>
			array (
				'action_id' => 552,
				'action_skill' => 'Hunter',
				'action_name' => 'Penguin Net Trap',
				'action_level' => 50,
				'action_experience' => 250,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			552 =>
			array (
				'action_id' => 553,
				'action_skill' => 'Hunter',
				'action_name' => 'Eclectic Impling',
				'action_level' => 50,
				'action_experience' => 289,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			553 =>
			array (
				'action_id' => 554,
				'action_skill' => 'Hunter',
				'action_name' => 'Sabre-Toothed Kebbit',
				'action_level' => 51,
				'action_experience' => 200,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			554 =>
			array (
				'action_id' => 555,
				'action_skill' => 'Hunter',
				'action_name' => 'Penguin Deadfall',
				'action_level' => 51,
				'action_experience' => 210,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			555 =>
			array (
				'action_id' => 556,
				'action_skill' => 'Hunter',
				'action_name' => 'Chinchompa',
				'action_level' => 53,
				'action_experience' => 199,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			556 =>
			array (
				'action_id' => 557,
				'action_skill' => 'Hunter',
				'action_name' => 'Spirit Impling',
				'action_level' => 54,
				'action_experience' => 321,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			557 =>
			array (
				'action_id' => 558,
				'action_skill' => 'Hunter',
				'action_name' => 'Sabre-Toothed Kyatt',
				'action_level' => 55,
				'action_experience' => 300,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			558 =>
			array (
				'action_id' => 559,
				'action_skill' => 'Hunter',
				'action_name' => 'Penguin Box Trap',
				'action_level' => 56,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			559 =>
			array (
				'action_id' => 560,
				'action_skill' => 'Hunter',
				'action_name' => 'Dark Kebbit',
				'action_level' => 57,
				'action_experience' => 132,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			560 =>
			array (
				'action_id' => 561,
				'action_skill' => 'Hunter',
				'action_name' => 'Nature Impling',
				'action_level' => 58,
				'action_experience' => 353,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			561 =>
			array (
				'action_id' => 562,
				'action_skill' => 'Hunter',
				'action_name' => 'Red Salamander',
				'action_level' => 59,
				'action_experience' => 272,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			562 =>
			array (
				'action_id' => 563,
				'action_skill' => 'Hunter',
				'action_name' => 'Carnivorous Chinchompa',
				'action_level' => 63,
				'action_experience' => 265,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			563 =>
			array (
				'action_id' => 564,
				'action_skill' => 'Hunter',
				'action_name' => 'Magpie Impling',
				'action_level' => 65,
				'action_experience' => 409,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			564 =>
			array (
				'action_id' => 565,
				'action_skill' => 'Hunter',
				'action_name' => 'Pawya',
				'action_level' => 66,
				'action_experience' => 400,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			565 =>
			array (
				'action_id' => 566,
				'action_skill' => 'Hunter',
				'action_name' => 'Black Salamander',
				'action_level' => 67,
				'action_experience' => 304,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			566 =>
			array (
				'action_id' => 567,
				'action_skill' => 'Hunter',
				'action_name' => 'Dashing Kebbit',
				'action_level' => 69,
				'action_experience' => 156,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			567 =>
			array (
				'action_id' => 568,
				'action_skill' => 'Hunter',
				'action_name' => 'Imp',
				'action_level' => 71,
				'action_experience' => 450,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			568 =>
			array (
				'action_id' => 569,
				'action_skill' => 'Hunter',
				'action_name' => 'Gleaelg',
				'action_level' => 72,
				'action_experience' => 130,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			569 =>
			array (
				'action_id' => 570,
				'action_skill' => 'Hunter',
				'action_name' => 'Slithtils',
				'action_level' => 72,
				'action_experience' => 400,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			570 =>
			array (
				'action_id' => 571,
				'action_skill' => 'Hunter',
				'action_name' => 'Tranart',
				'action_level' => 72,
				'action_experience' => 200,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			571 =>
			array (
				'action_id' => 572,
				'action_skill' => 'Hunter',
				'action_name' => 'Ninja Impling',
				'action_level' => 74,
				'action_experience' => 481,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			572 =>
			array (
				'action_id' => 573,
				'action_skill' => 'Hunter',
				'action_name' => 'Pirate Impling',
				'action_level' => 76,
				'action_experience' => 497,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			573 =>
			array (
				'action_id' => 574,
				'action_skill' => 'Hunter',
				'action_name' => 'Grenwall',
				'action_level' => 77,
				'action_experience' => 1100,
				'action_members' => 1,
				'action_category' => 'Animal',
			),
			574 =>
			array (
				'action_id' => 575,
				'action_skill' => 'Hunter',
				'action_name' => 'Ruby Harvest (Barehanded)',
				'action_level' => 80,
				'action_experience' => 300,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			575 =>
			array (
				'action_id' => 576,
				'action_skill' => 'Hunter',
				'action_name' => 'Dragon Impling',
				'action_level' => 83,
				'action_experience' => 553,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			576 =>
			array (
				'action_id' => 577,
				'action_skill' => 'Hunter',
				'action_name' => 'Sapphire Glaciali (Barehanded)',
				'action_level' => 85,
				'action_experience' => 400,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			577 =>
			array (
				'action_id' => 578,
				'action_skill' => 'Hunter',
				'action_name' => 'Zombie Impling',
				'action_level' => 87,
				'action_experience' => 585,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			578 =>
			array (
				'action_id' => 579,
				'action_skill' => 'Hunter',
				'action_name' => 'Snowy Knight (Barehanded)',
				'action_level' => 90,
				'action_experience' => 500,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			579 =>
			array (
				'action_id' => 580,
				'action_skill' => 'Hunter',
				'action_name' => 'Kingly Impling',
				'action_level' => 91,
				'action_experience' => 617,
				'action_members' => 1,
				'action_category' => 'Imp',
			),
			580 =>
			array (
				'action_id' => 581,
				'action_skill' => 'Hunter',
				'action_name' => 'Black Warlock (Barehanded)',
				'action_level' => 95,
				'action_experience' => 650,
				'action_members' => 1,
				'action_category' => 'Butterfly',
			),
			581 =>
			array (
				'action_id' => 582,
				'action_skill' => 'Mining',
				'action_name' => 'Clay',
				'action_level' => 1,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			582 =>
			array (
				'action_id' => 583,
				'action_skill' => 'Mining',
				'action_name' => 'Rune Essence',
				'action_level' => 1,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			583 =>
			array (
				'action_id' => 584,
				'action_skill' => 'Mining',
				'action_name' => 'Tin',
				'action_level' => 1,
				'action_experience' => 18,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			584 =>
			array (
				'action_id' => 585,
				'action_skill' => 'Mining',
				'action_name' => 'Copper',
				'action_level' => 1,
				'action_experience' => 18,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			585 =>
			array (
				'action_id' => 586,
				'action_skill' => 'Mining',
				'action_name' => 'Limestone',
				'action_level' => 10,
				'action_experience' => 27,
				'action_members' => 1,
				'action_category' => 'Ore',
			),
			586 =>
			array (
				'action_id' => 587,
				'action_skill' => 'Mining',
				'action_name' => 'Blurite',
				'action_level' => 10,
				'action_experience' => 18,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			587 =>
			array (
				'action_id' => 588,
				'action_skill' => 'Mining',
				'action_name' => 'Star Size 1',
				'action_level' => 10,
				'action_experience' => 14,
				'action_members' => 1,
				'action_category' => 'Star',
			),
			588 =>
			array (
				'action_id' => 589,
				'action_skill' => 'Mining',
				'action_name' => 'Iron',
				'action_level' => 15,
				'action_experience' => 35,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			589 =>
			array (
				'action_id' => 590,
				'action_skill' => 'Mining',
				'action_name' => 'Daeyalt',
				'action_level' => 20,
				'action_experience' => 18,
				'action_members' => 1,
				'action_category' => 'Ore',
			),
			590 =>
			array (
				'action_id' => 591,
				'action_skill' => 'Mining',
				'action_name' => 'Elemental',
				'action_level' => 20,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Ore',
			),
			591 =>
			array (
				'action_id' => 592,
				'action_skill' => 'Mining',
				'action_name' => 'Silver',
				'action_level' => 20,
				'action_experience' => 40,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			592 =>
			array (
				'action_id' => 593,
				'action_skill' => 'Mining',
				'action_name' => 'Star Size 2',
				'action_level' => 20,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Star',
			),
			593 =>
			array (
				'action_id' => 594,
				'action_skill' => 'Mining',
				'action_name' => 'Pure Essence',
				'action_level' => 30,
				'action_experience' => 5,
				'action_members' => 1,
				'action_category' => 'Ore',
			),
			594 =>
			array (
				'action_id' => 595,
				'action_skill' => 'Mining',
				'action_name' => 'Coal',
				'action_level' => 30,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			595 =>
			array (
				'action_id' => 596,
				'action_skill' => 'Mining',
				'action_name' => 'Star Size 3',
				'action_level' => 30,
				'action_experience' => 29,
				'action_members' => 1,
				'action_category' => 'Star',
			),
			596 =>
			array (
				'action_id' => 597,
				'action_skill' => 'Mining',
				'action_name' => 'Sandstone (10kg)',
				'action_level' => 35,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			597 =>
			array (
				'action_id' => 598,
				'action_skill' => 'Mining',
				'action_name' => 'Sandstone (5kg)',
				'action_level' => 35,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			598 =>
			array (
				'action_id' => 599,
				'action_skill' => 'Mining',
				'action_name' => 'Sandstone (2kg)',
				'action_level' => 35,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			599 =>
			array (
				'action_id' => 600,
				'action_skill' => 'Mining',
				'action_name' => 'Sandstone (1kg)',
				'action_level' => 35,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			600 =>
			array (
				'action_id' => 601,
				'action_skill' => 'Mining',
				'action_name' => 'Gold',
				'action_level' => 40,
				'action_experience' => 65,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			601 =>
			array (
				'action_id' => 602,
				'action_skill' => 'Mining',
				'action_name' => 'Gems',
				'action_level' => 40,
				'action_experience' => 65,
				'action_members' => 1,
				'action_category' => 'Ore',
			),
			602 =>
			array (
				'action_id' => 603,
				'action_skill' => 'Mining',
				'action_name' => 'Star Size 4',
				'action_level' => 40,
				'action_experience' => 32,
				'action_members' => 1,
				'action_category' => 'Star',
			),
			603 =>
			array (
				'action_id' => 604,
				'action_skill' => 'Mining',
				'action_name' => 'Obsidian',
				'action_level' => 41,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			604 =>
			array (
				'action_id' => 605,
				'action_skill' => 'Mining',
				'action_name' => 'Granite (5kg)',
				'action_level' => 45,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			605 =>
			array (
				'action_id' => 606,
				'action_skill' => 'Mining',
				'action_name' => 'Granite (2kg)',
				'action_level' => 45,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			606 =>
			array (
				'action_id' => 607,
				'action_skill' => 'Mining',
				'action_name' => 'Granite (500g)',
				'action_level' => 45,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			607 =>
			array (
				'action_id' => 608,
				'action_skill' => 'Mining',
				'action_name' => 'Rubium',
				'action_level' => 46,
				'action_experience' => 18,
				'action_members' => 1,
				'action_category' => 'Ore',
			),
			608 =>
			array (
				'action_id' => 609,
				'action_skill' => 'Mining',
				'action_name' => 'Star Size 5',
				'action_level' => 50,
				'action_experience' => 47,
				'action_members' => 1,
				'action_category' => 'Star',
			),
			609 =>
			array (
				'action_id' => 610,
				'action_skill' => 'Mining',
				'action_name' => 'Mithril',
				'action_level' => 55,
				'action_experience' => 80,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			610 =>
			array (
				'action_id' => 611,
				'action_skill' => 'Mining',
				'action_name' => 'Star Size 6',
				'action_level' => 60,
				'action_experience' => 71,
				'action_members' => 1,
				'action_category' => 'Star',
			),
			611 =>
			array (
				'action_id' => 612,
				'action_skill' => 'Mining',
				'action_name' => 'Adamantite',
				'action_level' => 70,
				'action_experience' => 95,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			612 =>
			array (
				'action_id' => 613,
				'action_skill' => 'Mining',
				'action_name' => 'Star Size 7',
				'action_level' => 70,
				'action_experience' => 114,
				'action_members' => 1,
				'action_category' => 'Star',
			),
			613 =>
			array (
				'action_id' => 614,
				'action_skill' => 'Mining',
				'action_name' => 'Living Rock Remains',
				'action_level' => 73,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Special',
			),
			614 =>
			array (
				'action_id' => 615,
				'action_skill' => 'Mining',
				'action_name' => 'Coal Deposits',
				'action_level' => 77,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			615 =>
			array (
				'action_id' => 616,
				'action_skill' => 'Mining',
				'action_name' => 'Gold Deposits',
				'action_level' => 80,
				'action_experience' => 65,
				'action_members' => 1,
				'action_category' => 'Special',
			),
			616 =>
			array (
				'action_id' => 617,
				'action_skill' => 'Mining',
				'action_name' => 'Star Size 8',
				'action_level' => 80,
				'action_experience' => 145,
				'action_members' => 1,
				'action_category' => 'Star',
			),
			617 =>
			array (
				'action_id' => 618,
				'action_skill' => 'Mining',
				'action_name' => 'Runite',
				'action_level' => 85,
				'action_experience' => 125,
				'action_members' => 0,
				'action_category' => 'Ore',
			),
			618 =>
			array (
				'action_id' => 619,
				'action_skill' => 'Mining',
				'action_name' => 'Star Size 9',
				'action_level' => 90,
				'action_experience' => 210,
				'action_members' => 1,
				'action_category' => 'Star',
			),
			619 =>
			array (
				'action_id' => 620,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Air Rune',
				'action_level' => 1,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Rune',
			),
			620 =>
			array (
				'action_id' => 621,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Soul Rune',
				'action_level' => 1,
				'action_experience' => 11,
				'action_members' => 1,
				'action_category' => 'Rune',
			),
			621 =>
			array (
				'action_id' => 622,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Air Tiara',
				'action_level' => 1,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Tiara',
			),
			622 =>
			array (
				'action_id' => 623,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Mind Tiara',
				'action_level' => 1,
				'action_experience' => 28,
				'action_members' => 0,
				'action_category' => 'Tiara',
			),
			623 =>
			array (
				'action_id' => 624,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Water Tiara',
				'action_level' => 1,
				'action_experience' => 30,
				'action_members' => 0,
				'action_category' => 'Tiara',
			),
			624 =>
			array (
				'action_id' => 625,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Earth Tiara',
				'action_level' => 1,
				'action_experience' => 33,
				'action_members' => 0,
				'action_category' => 'Tiara',
			),
			625 =>
			array (
				'action_id' => 626,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Fire Tiara',
				'action_level' => 1,
				'action_experience' => 35,
				'action_members' => 0,
				'action_category' => 'Tiara',
			),
			626 =>
			array (
				'action_id' => 627,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Body Tiara',
				'action_level' => 1,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Tiara',
			),
			627 =>
			array (
				'action_id' => 628,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Cosmic Tiara',
				'action_level' => 1,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Tiara',
			),
			628 =>
			array (
				'action_id' => 629,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Chaos Tiara',
				'action_level' => 1,
				'action_experience' => 43,
				'action_members' => 1,
				'action_category' => 'Tiara',
			),
			629 =>
			array (
				'action_id' => 630,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Nature Tiara',
				'action_level' => 1,
				'action_experience' => 45,
				'action_members' => 1,
				'action_category' => 'Tiara',
			),
			630 =>
			array (
				'action_id' => 631,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Law Tiara',
				'action_level' => 1,
				'action_experience' => 48,
				'action_members' => 1,
				'action_category' => 'Tiara',
			),
			631 =>
			array (
				'action_id' => 632,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Death Tiara',
				'action_level' => 1,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Tiara',
			),
			632 =>
			array (
				'action_id' => 633,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Blood Tiara',
				'action_level' => 1,
				'action_experience' => 53,
				'action_members' => 1,
				'action_category' => 'Tiara',
			),
			633 =>
			array (
				'action_id' => 634,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Mind Rune',
				'action_level' => 2,
				'action_experience' => 6,
				'action_members' => 0,
				'action_category' => 'Rune',
			),
			634 =>
			array (
				'action_id' => 635,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Water Rune',
				'action_level' => 5,
				'action_experience' => 6,
				'action_members' => 0,
				'action_category' => 'Rune',
			),
			635 =>
			array (
				'action_id' => 636,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Earth Rune',
				'action_level' => 9,
				'action_experience' => 7,
				'action_members' => 0,
				'action_category' => 'Rune',
			),
			636 =>
			array (
				'action_id' => 637,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Fire Rune',
				'action_level' => 14,
				'action_experience' => 7,
				'action_members' => 0,
				'action_category' => 'Rune',
			),
			637 =>
			array (
				'action_id' => 638,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Body Rune',
				'action_level' => 20,
				'action_experience' => 8,
				'action_members' => 0,
				'action_category' => 'Rune',
			),
			638 =>
			array (
				'action_id' => 639,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Cosmic Rune',
				'action_level' => 27,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'Rune',
			),
			639 =>
			array (
				'action_id' => 640,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Chaos Rune',
				'action_level' => 35,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Rune',
			),
			640 =>
			array (
				'action_id' => 641,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Astral Rune',
				'action_level' => 40,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Rune',
			),
			641 =>
			array (
				'action_id' => 642,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Nature Rune',
				'action_level' => 44,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Rune',
			),
			642 =>
			array (
				'action_id' => 643,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Law Rune',
				'action_level' => 54,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Rune',
			),
			643 =>
			array (
				'action_id' => 644,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Death Rune',
				'action_level' => 65,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Rune',
			),
			644 =>
			array (
				'action_id' => 645,
				'action_skill' => 'Runecrafting',
				'action_name' => 'Blood Rune',
				'action_level' => 77,
				'action_experience' => 11,
				'action_members' => 1,
				'action_category' => 'Rune',
			),
			645 =>
			array (
				'action_id' => 646,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Dagger',
				'action_level' => 1,
				'action_experience' => 13,
				'action_members' => 0,
				'action_category' => 'Dagger',
			),
			646 =>
			array (
				'action_id' => 647,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Hatchet',
				'action_level' => 1,
				'action_experience' => 13,
				'action_members' => 0,
				'action_category' => 'Hatchet',
			),
			647 =>
			array (
				'action_id' => 648,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Rails',
				'action_level' => 1,
				'action_experience' => 1,
				'action_members' => 0,
				'action_category' => 'Rails',
			),
			648 =>
			array (
				'action_id' => 649,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Mace',
				'action_level' => 2,
				'action_experience' => 13,
				'action_members' => 0,
				'action_category' => 'Mace',
			),
			649 =>
			array (
				'action_id' => 650,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Base Plate',
				'action_level' => 2,
				'action_experience' => 1,
				'action_members' => 0,
				'action_category' => 'Base Plate',
			),
			650 =>
			array (
				'action_id' => 651,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Med Helm',
				'action_level' => 3,
				'action_experience' => 13,
				'action_members' => 0,
				'action_category' => 'Med Helm',
			),
			651 =>
			array (
				'action_id' => 652,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Bolts',
				'action_level' => 3,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			652 =>
			array (
				'action_id' => 653,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Sword',
				'action_level' => 4,
				'action_experience' => 13,
				'action_members' => 0,
				'action_category' => 'Sword',
			),
			653 =>
			array (
				'action_id' => 654,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Dart Tips',
				'action_level' => 4,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Dart Tips',
			),
			654 =>
			array (
				'action_id' => 655,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Nails',
				'action_level' => 4,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Nails',
			),
			655 =>
			array (
				'action_id' => 656,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Wire',
				'action_level' => 4,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Wire',
			),
			656 =>
			array (
				'action_id' => 657,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Arrow Tips',
				'action_level' => 5,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Arrows',
			),
			657 =>
			array (
				'action_id' => 658,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Pickaxe',
				'action_level' => 5,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Pickaxe',
			),
			658 =>
			array (
				'action_id' => 659,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Scimitar',
				'action_level' => 5,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Scimitar',
			),
			659 =>
			array (
				'action_id' => 660,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Spikes',
				'action_level' => 5,
				'action_experience' => 1,
				'action_members' => 0,
				'action_category' => 'Spikes',
			),
			660 =>
			array (
				'action_id' => 661,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Spear',
				'action_level' => 5,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Spear',
			),
			661 =>
			array (
				'action_id' => 662,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Crossbow Limbs',
				'action_level' => 6,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Limbs',
			),
			662 =>
			array (
				'action_id' => 663,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Longsword',
				'action_level' => 6,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Long Sword',
			),
			663 =>
			array (
				'action_id' => 664,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Throwing Kinves (5)',
				'action_level' => 7,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Knives',
			),
			664 =>
			array (
				'action_id' => 665,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Full Helm',
				'action_level' => 7,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Full Helm',
			),
			665 =>
			array (
				'action_id' => 666,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Sq Shield',
				'action_level' => 8,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Sq Shield',
			),
			666 =>
			array (
				'action_id' => 667,
				'action_skill' => 'Smithing',
				'action_name' => 'Blurite Bolts',
				'action_level' => 8,
				'action_experience' => 18,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			667 =>
			array (
				'action_id' => 668,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Joint',
				'action_level' => 8,
				'action_experience' => 1,
				'action_members' => 0,
				'action_category' => 'Joint',
			),
			668 =>
			array (
				'action_id' => 669,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Warhammer',
				'action_level' => 9,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Warhammer',
			),
			669 =>
			array (
				'action_id' => 670,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Battleaxe',
				'action_level' => 10,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Battleaxe',
			),
			670 =>
			array (
				'action_id' => 671,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Chainbody',
				'action_level' => 11,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Chainbody',
			),
			671 =>
			array (
				'action_id' => 672,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Ties',
				'action_level' => 11,
				'action_experience' => 1,
				'action_members' => 0,
				'action_category' => 'Ties',
			),
			672 =>
			array (
				'action_id' => 673,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Kiteshield',
				'action_level' => 12,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Kiteshield',
			),
			673 =>
			array (
				'action_id' => 674,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Track ',
				'action_level' => 12,
				'action_experience' => 32,
				'action_members' => 0,
				'action_category' => 'Tracks',
			),
			674 =>
			array (
				'action_id' => 675,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Claws',
				'action_level' => 13,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Claws',
			),
			675 =>
			array (
				'action_id' => 676,
				'action_skill' => 'Smithing',
				'action_name' => 'Blurite Crossbow Limbs',
				'action_level' => 13,
				'action_experience' => 18,
				'action_members' => 1,
				'action_category' => 'Limbs',
			),
			676 =>
			array (
				'action_id' => 677,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze 2h Sword',
				'action_level' => 14,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => '2h Sword',
			),
			677 =>
			array (
				'action_id' => 678,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Dagger',
				'action_level' => 15,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Dagger',
			),
			678 =>
			array (
				'action_id' => 679,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Rails',
				'action_level' => 15,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Rails',
			),
			679 =>
			array (
				'action_id' => 680,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Plateskirt',
				'action_level' => 16,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Plateskirt',
			),
			680 =>
			array (
				'action_id' => 681,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Platelegs',
				'action_level' => 16,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Platelegs',
			),
			681 =>
			array (
				'action_id' => 682,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Hatchet',
				'action_level' => 16,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Hatchet',
			),
			682 =>
			array (
				'action_id' => 683,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Mace',
				'action_level' => 17,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Mace',
			),
			683 =>
			array (
				'action_id' => 684,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Spit',
				'action_level' => 17,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Spit',
			),
			684 =>
			array (
				'action_id' => 685,
				'action_skill' => 'Smithing',
				'action_name' => 'Bronze Platebody',
				'action_level' => 18,
				'action_experience' => 63,
				'action_members' => 0,
				'action_category' => 'Platebody',
			),
			685 =>
			array (
				'action_id' => 686,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Bolts',
				'action_level' => 18,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			686 =>
			array (
				'action_id' => 687,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Med Helm',
				'action_level' => 18,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Med Helm',
			),
			687 =>
			array (
				'action_id' => 688,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Sword',
				'action_level' => 19,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Sword',
			),
			688 =>
			array (
				'action_id' => 689,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Dart Tips',
				'action_level' => 19,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Dart Tips',
			),
			689 =>
			array (
				'action_id' => 690,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Nails',
				'action_level' => 19,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Nails',
			),
			690 =>
			array (
				'action_id' => 691,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Base Plate',
				'action_level' => 19,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Base Plate',
			),
			691 =>
			array (
				'action_id' => 692,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Arrow Tips',
				'action_level' => 20,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Arrows',
			),
			692 =>
			array (
				'action_id' => 693,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Pickaxe',
				'action_level' => 20,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Pickaxe',
			),
			693 =>
			array (
				'action_id' => 694,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Scimitar',
				'action_level' => 20,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Scimitar',
			),
			694 =>
			array (
				'action_id' => 695,
				'action_skill' => 'Smithing',
				'action_name' => 'Elemental Shield',
				'action_level' => 20,
				'action_experience' => 20,
				'action_members' => 1,
				'action_category' => 'Shield',
			),
			695 =>
			array (
				'action_id' => 696,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Spear',
				'action_level' => 20,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Spear',
			),
			696 =>
			array (
				'action_id' => 697,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Longsword',
				'action_level' => 21,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Long Sword',
			),
			697 =>
			array (
				'action_id' => 698,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Throwing Knives (5)',
				'action_level' => 22,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Knives',
			),
			698 =>
			array (
				'action_id' => 699,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Full Helm',
				'action_level' => 22,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Full Helm',
			),
			699 =>
			array (
				'action_id' => 700,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Crossbow Limbs',
				'action_level' => 23,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Limbs',
			),
			700 =>
			array (
				'action_id' => 701,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Sq Shield',
				'action_level' => 23,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Sq Shield',
			),
			701 =>
			array (
				'action_id' => 702,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Warhammer',
				'action_level' => 24,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Warhammer',
			),
			702 =>
			array (
				'action_id' => 703,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Spikes',
				'action_level' => 24,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Spikes',
			),
			703 =>
			array (
				'action_id' => 704,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Battleaxe',
				'action_level' => 25,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Battleaxe',
			),
			704 =>
			array (
				'action_id' => 705,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Chainbody',
				'action_level' => 26,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Chainbody',
			),
			705 =>
			array (
				'action_id' => 706,
				'action_skill' => 'Smithing',
				'action_name' => 'Oil lantern Frame',
				'action_level' => 26,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Lantern',
			),
			706 =>
			array (
				'action_id' => 707,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Kiteshield',
				'action_level' => 27,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Kiteshield',
			),
			707 =>
			array (
				'action_id' => 708,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Claws',
				'action_level' => 28,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Claws',
			),
			708 =>
			array (
				'action_id' => 709,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron 2h Sword',
				'action_level' => 29,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => '2h Sword',
			),
			709 =>
			array (
				'action_id' => 710,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Joint',
				'action_level' => 29,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Joint',
			),
			710 =>
			array (
				'action_id' => 711,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Dagger',
				'action_level' => 30,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Dagger',
			),
			711 =>
			array (
				'action_id' => 712,
				'action_skill' => 'Smithing',
				'action_name' => 'Elemental Helmet',
				'action_level' => 30,
				'action_experience' => 20,
				'action_members' => 1,
				'action_category' => 'Helmet',
			),
			712 =>
			array (
				'action_id' => 713,
				'action_skill' => 'Smithing',
				'action_name' => 'Mind Shield',
				'action_level' => 30,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Shield',
			),
			713 =>
			array (
				'action_id' => 714,
				'action_skill' => 'Smithing',
				'action_name' => 'Mind Helmet',
				'action_level' => 30,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Helmet',
			),
			714 =>
			array (
				'action_id' => 715,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Ingot I',
				'action_level' => 30,
				'action_experience' => 101,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			715 =>
			array (
				'action_id' => 716,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Ingot II',
				'action_level' => 30,
				'action_experience' => 202,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			716 =>
			array (
				'action_id' => 717,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Ingot III',
				'action_level' => 30,
				'action_experience' => 240,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			717 =>
			array (
				'action_id' => 718,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Plateskirt',
				'action_level' => 31,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Plateskirt',
			),
			718 =>
			array (
				'action_id' => 719,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Platelegs',
				'action_level' => 31,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Platelegs',
			),
			719 =>
			array (
				'action_id' => 720,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Hatchet',
				'action_level' => 31,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Hatchet',
			),
			720 =>
			array (
				'action_id' => 721,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Mace',
				'action_level' => 32,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Mace',
			),
			721 =>
			array (
				'action_id' => 722,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Platebody',
				'action_level' => 33,
				'action_experience' => 125,
				'action_members' => 0,
				'action_category' => 'Platebody',
			),
			722 =>
			array (
				'action_id' => 723,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Bolts',
				'action_level' => 33,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			723 =>
			array (
				'action_id' => 724,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Med Helm',
				'action_level' => 33,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Med Helm',
			),
			724 =>
			array (
				'action_id' => 725,
				'action_skill' => 'Smithing',
				'action_name' => 'Elemental Body',
				'action_level' => 33,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Body',
			),
			725 =>
			array (
				'action_id' => 726,
				'action_skill' => 'Smithing',
				'action_name' => 'Mind Body',
				'action_level' => 33,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Body',
			),
			726 =>
			array (
				'action_id' => 727,
				'action_skill' => 'Smithing',
				'action_name' => 'Body Shield',
				'action_level' => 33,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Shield',
			),
			727 =>
			array (
				'action_id' => 728,
				'action_skill' => 'Smithing',
				'action_name' => 'Body Helmet',
				'action_level' => 33,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Helmet',
			),
			728 =>
			array (
				'action_id' => 729,
				'action_skill' => 'Smithing',
				'action_name' => 'Body Body',
				'action_level' => 33,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Body',
			),
			729 =>
			array (
				'action_id' => 730,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Sword',
				'action_level' => 34,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Sword',
			),
			730 =>
			array (
				'action_id' => 731,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Dart Tips',
				'action_level' => 34,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Dart Tips',
			),
			731 =>
			array (
				'action_id' => 732,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Nails',
				'action_level' => 34,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Nails',
			),
			732 =>
			array (
				'action_id' => 733,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Ties',
				'action_level' => 34,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Ties',
			),
			733 =>
			array (
				'action_id' => 734,
				'action_skill' => 'Smithing',
				'action_name' => 'Cannonballs (4)',
				'action_level' => 35,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Cannonballs',
			),
			734 =>
			array (
				'action_id' => 735,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Arrow Tips',
				'action_level' => 35,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Arrows',
			),
			735 =>
			array (
				'action_id' => 736,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Pickaxe',
				'action_level' => 35,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Pickaxe',
			),
			736 =>
			array (
				'action_id' => 737,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Scimitar',
				'action_level' => 35,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Scimitar',
			),
			737 =>
			array (
				'action_id' => 738,
				'action_skill' => 'Smithing',
				'action_name' => 'Iron Track ',
				'action_level' => 35,
				'action_experience' => 46,
				'action_members' => 0,
				'action_category' => 'Tracks',
			),
			738 =>
			array (
				'action_id' => 739,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Spear',
				'action_level' => 35,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Spear',
			),
			739 =>
			array (
				'action_id' => 740,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Studs',
				'action_level' => 36,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Studs',
			),
			740 =>
			array (
				'action_id' => 741,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Longsword',
				'action_level' => 36,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Long Sword',
			),
			741 =>
			array (
				'action_id' => 742,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Crossbow Limbs',
				'action_level' => 36,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Limbs',
			),
			742 =>
			array (
				'action_id' => 743,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Throwing Knives (5)',
				'action_level' => 37,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Knives',
			),
			743 =>
			array (
				'action_id' => 744,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Full Helm',
				'action_level' => 37,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Full Helm',
			),
			744 =>
			array (
				'action_id' => 745,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Sq Shield',
				'action_level' => 38,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Sq Shield',
			),
			745 =>
			array (
				'action_id' => 746,
				'action_skill' => 'Smithing',
				'action_name' => 'Elemental Gloves',
				'action_level' => 38,
				'action_experience' => 20,
				'action_members' => 1,
				'action_category' => 'Gloves',
			),
			746 =>
			array (
				'action_id' => 747,
				'action_skill' => 'Smithing',
				'action_name' => 'Mind Gloves',
				'action_level' => 38,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Gloves',
			),
			747 =>
			array (
				'action_id' => 748,
				'action_skill' => 'Smithing',
				'action_name' => 'Body Gloves',
				'action_level' => 38,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Gloves',
			),
			748 =>
			array (
				'action_id' => 749,
				'action_skill' => 'Smithing',
				'action_name' => 'Cosmic Shield',
				'action_level' => 38,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Shield',
			),
			749 =>
			array (
				'action_id' => 750,
				'action_skill' => 'Smithing',
				'action_name' => 'Cosmic Helmet',
				'action_level' => 38,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Helmet',
			),
			750 =>
			array (
				'action_id' => 751,
				'action_skill' => 'Smithing',
				'action_name' => 'Cosmic Body',
				'action_level' => 38,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Body',
			),
			751 =>
			array (
				'action_id' => 752,
				'action_skill' => 'Smithing',
				'action_name' => 'Cosmic Gloves',
				'action_level' => 38,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Gloves',
			),
			752 =>
			array (
				'action_id' => 753,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Warhammer',
				'action_level' => 39,
				'action_experience' => 113,
				'action_members' => 0,
				'action_category' => 'Warhammer',
			),
			753 =>
			array (
				'action_id' => 754,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Rails',
				'action_level' => 39,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Rails',
			),
			754 =>
			array (
				'action_id' => 755,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Battleaxe',
				'action_level' => 40,
				'action_experience' => 113,
				'action_members' => 0,
				'action_category' => 'Battleaxe',
			),
			755 =>
			array (
				'action_id' => 756,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Chainbody',
				'action_level' => 41,
				'action_experience' => 113,
				'action_members' => 0,
				'action_category' => 'Chainbody',
			),
			756 =>
			array (
				'action_id' => 757,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Kiteshield',
				'action_level' => 42,
				'action_experience' => 113,
				'action_members' => 0,
				'action_category' => 'Kiteshield',
			),
			757 =>
			array (
				'action_id' => 758,
				'action_skill' => 'Smithing',
				'action_name' => 'Elemental Boots',
				'action_level' => 42,
				'action_experience' => 20,
				'action_members' => 1,
				'action_category' => 'Boots',
			),
			758 =>
			array (
				'action_id' => 759,
				'action_skill' => 'Smithing',
				'action_name' => 'Mind Boots',
				'action_level' => 42,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Boots',
			),
			759 =>
			array (
				'action_id' => 760,
				'action_skill' => 'Smithing',
				'action_name' => 'Body Boots',
				'action_level' => 42,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Boots',
			),
			760 =>
			array (
				'action_id' => 761,
				'action_skill' => 'Smithing',
				'action_name' => 'Cosmic Boots',
				'action_level' => 42,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Boots',
			),
			761 =>
			array (
				'action_id' => 762,
				'action_skill' => 'Smithing',
				'action_name' => 'Chaos Shield',
				'action_level' => 42,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Shield',
			),
			762 =>
			array (
				'action_id' => 763,
				'action_skill' => 'Smithing',
				'action_name' => 'Chaos Helmet',
				'action_level' => 42,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Helmet',
			),
			763 =>
			array (
				'action_id' => 764,
				'action_skill' => 'Smithing',
				'action_name' => 'Chaos Body',
				'action_level' => 42,
				'action_experience' => 120,
				'action_members' => 1,
				'action_category' => 'Body',
			),
			764 =>
			array (
				'action_id' => 765,
				'action_skill' => 'Smithing',
				'action_name' => 'Chaos Gloves',
				'action_level' => 42,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Gloves',
			),
			765 =>
			array (
				'action_id' => 766,
				'action_skill' => 'Smithing',
				'action_name' => 'Chaos Boots',
				'action_level' => 42,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Boots',
			),
			766 =>
			array (
				'action_id' => 767,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Claws',
				'action_level' => 43,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Claws',
			),
			767 =>
			array (
				'action_id' => 768,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel 2h Sword',
				'action_level' => 44,
				'action_experience' => 113,
				'action_members' => 0,
				'action_category' => '2h Sword',
			),
			768 =>
			array (
				'action_id' => 769,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Base Plate',
				'action_level' => 44,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Base Plate',
			),
			769 =>
			array (
				'action_id' => 770,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Ingot I',
				'action_level' => 45,
				'action_experience' => 131,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			770 =>
			array (
				'action_id' => 771,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Ingot II',
				'action_level' => 45,
				'action_experience' => 253,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			771 =>
			array (
				'action_id' => 772,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Ingot III',
				'action_level' => 45,
				'action_experience' => 354,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			772 =>
			array (
				'action_id' => 773,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Plateskirt',
				'action_level' => 46,
				'action_experience' => 113,
				'action_members' => 0,
				'action_category' => 'Plateskirt',
			),
			773 =>
			array (
				'action_id' => 774,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Platelegs',
				'action_level' => 46,
				'action_experience' => 113,
				'action_members' => 0,
				'action_category' => 'Platelegs',
			),
			774 =>
			array (
				'action_id' => 775,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Platebody',
				'action_level' => 48,
				'action_experience' => 188,
				'action_members' => 0,
				'action_category' => 'Platebody',
			),
			775 =>
			array (
				'action_id' => 776,
				'action_skill' => 'Smithing',
				'action_name' => 'Bullseye Lantern Frame',
				'action_level' => 49,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Lantern',
			),
			776 =>
			array (
				'action_id' => 777,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Spikes',
				'action_level' => 49,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Spikes',
			),
			777 =>
			array (
				'action_id' => 778,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Dagger',
				'action_level' => 50,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Dagger',
			),
			778 =>
			array (
				'action_id' => 779,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Hatchet',
				'action_level' => 51,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Hatchet',
			),
			779 =>
			array (
				'action_id' => 780,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Mace',
				'action_level' => 52,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Mace',
			),
			780 =>
			array (
				'action_id' => 781,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Bolts',
				'action_level' => 53,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			781 =>
			array (
				'action_id' => 782,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Med Helm',
				'action_level' => 53,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Med Helm',
			),
			782 =>
			array (
				'action_id' => 783,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Sword',
				'action_level' => 54,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Sword',
			),
			783 =>
			array (
				'action_id' => 784,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Dart Tips',
				'action_level' => 54,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Dart Tips',
			),
			784 =>
			array (
				'action_id' => 785,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Nails',
				'action_level' => 54,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Nails',
			),
			785 =>
			array (
				'action_id' => 786,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Joint',
				'action_level' => 54,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Joint',
			),
			786 =>
			array (
				'action_id' => 787,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Arrow Tips',
				'action_level' => 55,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Arrows',
			),
			787 =>
			array (
				'action_id' => 788,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Pickaxe',
				'action_level' => 55,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Pickaxe',
			),
			788 =>
			array (
				'action_id' => 789,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Scimitar',
				'action_level' => 55,
				'action_experience' => 100,
				'action_members' => 0,
				'action_category' => 'Scimitar',
			),
			789 =>
			array (
				'action_id' => 790,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Spear',
				'action_level' => 55,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Spear',
			),
			790 =>
			array (
				'action_id' => 791,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Crossbow Limbs',
				'action_level' => 56,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Limbs',
			),
			791 =>
			array (
				'action_id' => 792,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Longsword',
				'action_level' => 56,
				'action_experience' => 100,
				'action_members' => 0,
				'action_category' => 'Long Sword',
			),
			792 =>
			array (
				'action_id' => 793,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Throwing Knives (5)',
				'action_level' => 57,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Knives',
			),
			793 =>
			array (
				'action_id' => 794,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Full Helm',
				'action_level' => 57,
				'action_experience' => 100,
				'action_members' => 0,
				'action_category' => 'Full Helm',
			),
			794 =>
			array (
				'action_id' => 795,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Sq Shield',
				'action_level' => 58,
				'action_experience' => 100,
				'action_members' => 0,
				'action_category' => 'Sq Shield',
			),
			795 =>
			array (
				'action_id' => 796,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Grapple Tip',
				'action_level' => 59,
				'action_experience' => 50,
				'action_members' => 0,
				'action_category' => 'Grapple',
			),
			796 =>
			array (
				'action_id' => 797,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Warhammer',
				'action_level' => 59,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => 'Warhammer',
			),
			797 =>
			array (
				'action_id' => 798,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Ties',
				'action_level' => 59,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Ties',
			),
			798 =>
			array (
				'action_id' => 799,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Battleaxe',
				'action_level' => 60,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => 'Battleaxe',
			),
			799 =>
			array (
				'action_id' => 800,
				'action_skill' => 'Smithing',
				'action_name' => 'Dragon Sq Shield',
				'action_level' => 60,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Sq Shield',
			),
			800 =>
			array (
				'action_id' => 801,
				'action_skill' => 'Smithing',
				'action_name' => 'Steel Track',
				'action_level' => 60,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Tracks',
			),
			801 =>
			array (
				'action_id' => 802,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Ingot I',
				'action_level' => 60,
				'action_experience' => 164,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			802 =>
			array (
				'action_id' => 803,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Ingot II',
				'action_level' => 60,
				'action_experience' => 316,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			803 =>
			array (
				'action_id' => 804,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Ingot III',
				'action_level' => 60,
				'action_experience' => 404,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			804 =>
			array (
				'action_id' => 805,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Chainbosy',
				'action_level' => 61,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => 'Chainbody',
			),
			805 =>
			array (
				'action_id' => 806,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Kiteshield',
				'action_level' => 62,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => 'Kiteshield',
			),
			806 =>
			array (
				'action_id' => 807,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Claws',
				'action_level' => 63,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Claws',
			),
			807 =>
			array (
				'action_id' => 808,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril 2h Sword',
				'action_level' => 64,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => '2h Sword',
			),
			808 =>
			array (
				'action_id' => 809,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Plateskirt',
				'action_level' => 66,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => 'Plateskirt',
			),
			809 =>
			array (
				'action_id' => 810,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Platelegs',
				'action_level' => 66,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => 'Platelegs',
			),
			810 =>
			array (
				'action_id' => 811,
				'action_skill' => 'Smithing',
				'action_name' => 'Mithril Platebody',
				'action_level' => 68,
				'action_experience' => 200,
				'action_members' => 0,
				'action_category' => 'Platebody',
			),
			811 =>
			array (
				'action_id' => 812,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Dagger',
				'action_level' => 70,
				'action_experience' => 63,
				'action_members' => 0,
				'action_category' => 'Dagger',
			),
			812 =>
			array (
				'action_id' => 813,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Ingot I',
				'action_level' => 70,
				'action_experience' => 278,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			813 =>
			array (
				'action_id' => 814,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Ingot II',
				'action_level' => 70,
				'action_experience' => 455,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			814 =>
			array (
				'action_id' => 815,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Ingot III',
				'action_level' => 70,
				'action_experience' => 568,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			815 =>
			array (
				'action_id' => 816,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Hatchet',
				'action_level' => 71,
				'action_experience' => 63,
				'action_members' => 0,
				'action_category' => 'Hatchet',
			),
			816 =>
			array (
				'action_id' => 817,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Mace',
				'action_level' => 72,
				'action_experience' => 63,
				'action_members' => 0,
				'action_category' => 'Mace',
			),
			817 =>
			array (
				'action_id' => 818,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Bolts',
				'action_level' => 73,
				'action_experience' => 63,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			818 =>
			array (
				'action_id' => 819,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Med Helm',
				'action_level' => 73,
				'action_experience' => 63,
				'action_members' => 0,
				'action_category' => 'Med Helm',
			),
			819 =>
			array (
				'action_id' => 820,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamand Sword',
				'action_level' => 74,
				'action_experience' => 63,
				'action_members' => 0,
				'action_category' => 'Sword',
			),
			820 =>
			array (
				'action_id' => 821,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Dart Tips',
				'action_level' => 74,
				'action_experience' => 63,
				'action_members' => 1,
				'action_category' => 'Dart Tips',
			),
			821 =>
			array (
				'action_id' => 822,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Nails',
				'action_level' => 74,
				'action_experience' => 63,
				'action_members' => 1,
				'action_category' => 'Nails',
			),
			822 =>
			array (
				'action_id' => 823,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Arrow Tips',
				'action_level' => 75,
				'action_experience' => 63,
				'action_members' => 1,
				'action_category' => 'Arrows',
			),
			823 =>
			array (
				'action_id' => 824,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Pickaxe',
				'action_level' => 75,
				'action_experience' => 125,
				'action_members' => 1,
				'action_category' => 'Pickaxe',
			),
			824 =>
			array (
				'action_id' => 825,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Scimitar',
				'action_level' => 75,
				'action_experience' => 125,
				'action_members' => 0,
				'action_category' => 'Scimitar',
			),
			825 =>
			array (
				'action_id' => 826,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Spear',
				'action_level' => 75,
				'action_experience' => 125,
				'action_members' => 1,
				'action_category' => 'Spear',
			),
			826 =>
			array (
				'action_id' => 827,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Crossbow Limbs',
				'action_level' => 76,
				'action_experience' => 63,
				'action_members' => 1,
				'action_category' => 'Limbs',
			),
			827 =>
			array (
				'action_id' => 828,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Longsword',
				'action_level' => 76,
				'action_experience' => 125,
				'action_members' => 0,
				'action_category' => 'Long Sword',
			),
			828 =>
			array (
				'action_id' => 829,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Throwing Knives (5)',
				'action_level' => 77,
				'action_experience' => 63,
				'action_members' => 1,
				'action_category' => 'Knives',
			),
			829 =>
			array (
				'action_id' => 830,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Full Helm',
				'action_level' => 77,
				'action_experience' => 125,
				'action_members' => 0,
				'action_category' => 'Full Helm',
			),
			830 =>
			array (
				'action_id' => 831,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Sq Shield',
				'action_level' => 78,
				'action_experience' => 125,
				'action_members' => 0,
				'action_category' => 'Sq Shield',
			),
			831 =>
			array (
				'action_id' => 832,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Warhammer',
				'action_level' => 79,
				'action_experience' => 188,
				'action_members' => 0,
				'action_category' => 'Warhammer',
			),
			832 =>
			array (
				'action_id' => 833,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Battleaxe',
				'action_level' => 80,
				'action_experience' => 188,
				'action_members' => 0,
				'action_category' => 'Battleaxe',
			),
			833 =>
			array (
				'action_id' => 834,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Chainbody',
				'action_level' => 81,
				'action_experience' => 188,
				'action_members' => 0,
				'action_category' => 'Chainbody',
			),
			834 =>
			array (
				'action_id' => 835,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Kiteshield',
				'action_level' => 82,
				'action_experience' => 188,
				'action_members' => 0,
				'action_category' => 'Kiteshield',
			),
			835 =>
			array (
				'action_id' => 836,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Claws',
				'action_level' => 83,
				'action_experience' => 125,
				'action_members' => 1,
				'action_category' => 'Claws',
			),
			836 =>
			array (
				'action_id' => 837,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant 2h Sword',
				'action_level' => 84,
				'action_experience' => 188,
				'action_members' => 0,
				'action_category' => '2h Sword',
			),
			837 =>
			array (
				'action_id' => 838,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Dagger ',
				'action_level' => 85,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Dagger',
			),
			838 =>
			array (
				'action_id' => 839,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Plateskirt',
				'action_level' => 86,
				'action_experience' => 188,
				'action_members' => 0,
				'action_category' => 'Plateskirt',
			),
			839 =>
			array (
				'action_id' => 840,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Platelegs',
				'action_level' => 86,
				'action_experience' => 188,
				'action_members' => 0,
				'action_category' => 'Platelegs',
			),
			840 =>
			array (
				'action_id' => 841,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Hatchet',
				'action_level' => 86,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Hatchet',
			),
			841 =>
			array (
				'action_id' => 842,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Mace',
				'action_level' => 87,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Mace',
			),
			842 =>
			array (
				'action_id' => 843,
				'action_skill' => 'Smithing',
				'action_name' => 'Adamant Platebody',
				'action_level' => 88,
				'action_experience' => 313,
				'action_members' => 0,
				'action_category' => 'Platebody',
			),
			843 =>
			array (
				'action_id' => 844,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Bolts',
				'action_level' => 88,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Bolts',
			),
			844 =>
			array (
				'action_id' => 845,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Med Helm',
				'action_level' => 88,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Med Helm',
			),
			845 =>
			array (
				'action_id' => 846,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Sword',
				'action_level' => 89,
				'action_experience' => 75,
				'action_members' => 0,
				'action_category' => 'Sword',
			),
			846 =>
			array (
				'action_id' => 847,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Dart Tips',
				'action_level' => 89,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Dart Tips',
			),
			847 =>
			array (
				'action_id' => 848,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Nails',
				'action_level' => 89,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Nails',
			),
			848 =>
			array (
				'action_id' => 849,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Arrow Tips',
				'action_level' => 90,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Arrows',
			),
			849 =>
			array (
				'action_id' => 850,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Pickaxe',
				'action_level' => 90,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Pickaxe',
			),
			850 =>
			array (
				'action_id' => 851,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Scimitar',
				'action_level' => 90,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => 'Scimitar',
			),
			851 =>
			array (
				'action_id' => 852,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Ingot I',
				'action_level' => 90,
				'action_experience' => 505,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			852 =>
			array (
				'action_id' => 853,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Ingot II',
				'action_level' => 90,
				'action_experience' => 631,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			853 =>
			array (
				'action_id' => 854,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Ingot III',
				'action_level' => 90,
				'action_experience' => 758,
				'action_members' => 0,
				'action_category' => 'Ingot',
			),
			854 =>
			array (
				'action_id' => 855,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Spear',
				'action_level' => 90,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Spear',
			),
			855 =>
			array (
				'action_id' => 856,
				'action_skill' => 'Smithing',
				'action_name' => 'Runite Crossbow Limbs',
				'action_level' => 91,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Limbs',
			),
			856 =>
			array (
				'action_id' => 857,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Longsword',
				'action_level' => 91,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => 'Long Sword',
			),
			857 =>
			array (
				'action_id' => 858,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Throwing Knives (5)',
				'action_level' => 92,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Knives',
			),
			858 =>
			array (
				'action_id' => 859,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Full Helm',
				'action_level' => 92,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => 'Full Helm',
			),
			859 =>
			array (
				'action_id' => 860,
				'action_skill' => 'Smithing',
				'action_name' => 'Dragon Platebody',
				'action_level' => 92,
				'action_experience' => 2000,
				'action_members' => 1,
				'action_category' => 'Platebody',
			),
			860 =>
			array (
				'action_id' => 861,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Sq Shield',
				'action_level' => 93,
				'action_experience' => 150,
				'action_members' => 0,
				'action_category' => 'Sq Shield',
			),
			861 =>
			array (
				'action_id' => 862,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Warhammer',
				'action_level' => 94,
				'action_experience' => 225,
				'action_members' => 0,
				'action_category' => 'Warhammer',
			),
			862 =>
			array (
				'action_id' => 863,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Battleaxe',
				'action_level' => 95,
				'action_experience' => 225,
				'action_members' => 0,
				'action_category' => 'Battleaxe',
			),
			863 =>
			array (
				'action_id' => 864,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Chainbody',
				'action_level' => 96,
				'action_experience' => 225,
				'action_members' => 0,
				'action_category' => 'Chainbody',
			),
			864 =>
			array (
				'action_id' => 865,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Kiteshield',
				'action_level' => 97,
				'action_experience' => 225,
				'action_members' => 0,
				'action_category' => 'Kiteshield',
			),
			865 =>
			array (
				'action_id' => 866,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Claws',
				'action_level' => 98,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Claws',
			),
			866 =>
			array (
				'action_id' => 867,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune 2h Sword',
				'action_level' => 99,
				'action_experience' => 225,
				'action_members' => 0,
				'action_category' => '2h Sword',
			),
			867 =>
			array (
				'action_id' => 868,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Plateskirt',
				'action_level' => 99,
				'action_experience' => 225,
				'action_members' => 0,
				'action_category' => 'Plateskirt',
			),
			868 =>
			array (
				'action_id' => 869,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Platelegs',
				'action_level' => 99,
				'action_experience' => 225,
				'action_members' => 0,
				'action_category' => 'Platelegs',
			),
			869 =>
			array (
				'action_id' => 870,
				'action_skill' => 'Smithing',
				'action_name' => 'Rune Platebody',
				'action_level' => 99,
				'action_experience' => 375,
				'action_members' => 0,
				'action_category' => 'Platebody',
			),
			870 =>
			array (
				'action_id' => 871,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Wolf',
				'action_level' => 1,
				'action_experience' => 5,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			871 =>
			array (
				'action_id' => 872,
				'action_skill' => 'Summoning',
				'action_name' => 'Dreadfowl',
				'action_level' => 4,
				'action_experience' => 9,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			872 =>
			array (
				'action_id' => 873,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Spider',
				'action_level' => 10,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			873 =>
			array (
				'action_id' => 874,
				'action_skill' => 'Summoning',
				'action_name' => 'Thorny Snail',
				'action_level' => 13,
				'action_experience' => 13,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			874 =>
			array (
				'action_id' => 875,
				'action_skill' => 'Summoning',
				'action_name' => 'Granite Crab',
				'action_level' => 16,
				'action_experience' => 22,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			875 =>
			array (
				'action_id' => 876,
				'action_skill' => 'Summoning',
				'action_name' => 'Mosquito',
				'action_level' => 17,
				'action_experience' => 47,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			876 =>
			array (
				'action_id' => 877,
				'action_skill' => 'Summoning',
				'action_name' => 'Desert Wyrm',
				'action_level' => 18,
				'action_experience' => 31,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			877 =>
			array (
				'action_id' => 878,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Scorpion',
				'action_level' => 19,
				'action_experience' => 83,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			878 =>
			array (
				'action_id' => 879,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Tz-Kih',
				'action_level' => 22,
				'action_experience' => 97,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			879 =>
			array (
				'action_id' => 880,
				'action_skill' => 'Summoning',
				'action_name' => 'Albino Rat',
				'action_level' => 23,
				'action_experience' => 202,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			880 =>
			array (
				'action_id' => 881,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Kalphite',
				'action_level' => 25,
				'action_experience' => 220,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			881 =>
			array (
				'action_id' => 882,
				'action_skill' => 'Summoning',
				'action_name' => 'Compost Mound',
				'action_level' => 28,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			882 =>
			array (
				'action_id' => 883,
				'action_skill' => 'Summoning',
				'action_name' => 'Giant Chinchompa',
				'action_level' => 29,
				'action_experience' => 255,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			883 =>
			array (
				'action_id' => 884,
				'action_skill' => 'Summoning',
				'action_name' => 'Vampire Bat',
				'action_level' => 31,
				'action_experience' => 136,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			884 =>
			array (
				'action_id' => 885,
				'action_skill' => 'Summoning',
				'action_name' => 'Honey Badger',
				'action_level' => 32,
				'action_experience' => 141,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			885 =>
			array (
				'action_id' => 886,
				'action_skill' => 'Summoning',
				'action_name' => 'Beaver',
				'action_level' => 33,
				'action_experience' => 58,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			886 =>
			array (
				'action_id' => 887,
				'action_skill' => 'Summoning',
				'action_name' => 'Void Ravager',
				'action_level' => 34,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			887 =>
			array (
				'action_id' => 888,
				'action_skill' => 'Summoning',
				'action_name' => 'Void Shifter',
				'action_level' => 34,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			888 =>
			array (
				'action_id' => 889,
				'action_skill' => 'Summoning',
				'action_name' => 'Void Torcher',
				'action_level' => 34,
				'action_experience' => 60,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			889 =>
			array (
				'action_id' => 890,
				'action_skill' => 'Summoning',
				'action_name' => 'Bronze Minotaur',
				'action_level' => 36,
				'action_experience' => 317,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			890 =>
			array (
				'action_id' => 891,
				'action_skill' => 'Summoning',
				'action_name' => 'Bull Ant',
				'action_level' => 40,
				'action_experience' => 53,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			891 =>
			array (
				'action_id' => 892,
				'action_skill' => 'Summoning',
				'action_name' => 'Macaw',
				'action_level' => 41,
				'action_experience' => 72,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			892 =>
			array (
				'action_id' => 893,
				'action_skill' => 'Summoning',
				'action_name' => 'Evil Turnip',
				'action_level' => 42,
				'action_experience' => 185,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			893 =>
			array (
				'action_id' => 894,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Cockatrice (and variants)',
				'action_level' => 43,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			894 =>
			array (
				'action_id' => 895,
				'action_skill' => 'Summoning',
				'action_name' => 'Iron Minotaur',
				'action_level' => 46,
				'action_experience' => 405,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			895 =>
			array (
				'action_id' => 896,
				'action_skill' => 'Summoning',
				'action_name' => 'Pyrelord',
				'action_level' => 46,
				'action_experience' => 202,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			896 =>
			array (
				'action_id' => 897,
				'action_skill' => 'Summoning',
				'action_name' => 'Magpie',
				'action_level' => 47,
				'action_experience' => 83,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			897 =>
			array (
				'action_id' => 898,
				'action_skill' => 'Summoning',
				'action_name' => 'Bloated Leech',
				'action_level' => 49,
				'action_experience' => 215,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			898 =>
			array (
				'action_id' => 899,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Terrorbird',
				'action_level' => 52,
				'action_experience' => 68,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			899 =>
			array (
				'action_id' => 900,
				'action_skill' => 'Summoning',
				'action_name' => 'Abyssal Parasite',
				'action_level' => 54,
				'action_experience' => 95,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			900 =>
			array (
				'action_id' => 901,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Jelly',
				'action_level' => 55,
				'action_experience' => 484,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			901 =>
			array (
				'action_id' => 902,
				'action_skill' => 'Summoning',
				'action_name' => 'Ibis',
				'action_level' => 56,
				'action_experience' => 99,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			902 =>
			array (
				'action_id' => 903,
				'action_skill' => 'Summoning',
				'action_name' => 'Steel Minatour',
				'action_level' => 56,
				'action_experience' => 493,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			903 =>
			array (
				'action_id' => 904,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Graahk',
				'action_level' => 57,
				'action_experience' => 502,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			904 =>
			array (
				'action_id' => 905,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Kyatt',
				'action_level' => 57,
				'action_experience' => 502,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			905 =>
			array (
				'action_id' => 906,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Larupia',
				'action_level' => 57,
				'action_experience' => 502,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			906 =>
			array (
				'action_id' => 907,
				'action_skill' => 'Summoning',
				'action_name' => 'Karamthulhu Overlord',
				'action_level' => 58,
				'action_experience' => 510,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			907 =>
			array (
				'action_id' => 908,
				'action_skill' => 'Summoning',
				'action_name' => 'Smoke Devil',
				'action_level' => 61,
				'action_experience' => 268,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			908 =>
			array (
				'action_id' => 909,
				'action_skill' => 'Summoning',
				'action_name' => 'Abyssal Lurker',
				'action_level' => 62,
				'action_experience' => 110,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			909 =>
			array (
				'action_id' => 910,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Cobra',
				'action_level' => 63,
				'action_experience' => 277,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			910 =>
			array (
				'action_id' => 911,
				'action_skill' => 'Summoning',
				'action_name' => 'Stranger Plant',
				'action_level' => 64,
				'action_experience' => 282,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			911 =>
			array (
				'action_id' => 912,
				'action_skill' => 'Summoning',
				'action_name' => 'Barker Toad',
				'action_level' => 66,
				'action_experience' => 87,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			912 =>
			array (
				'action_id' => 913,
				'action_skill' => 'Summoning',
				'action_name' => 'Mithril Minotaur',
				'action_level' => 66,
				'action_experience' => 581,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			913 =>
			array (
				'action_id' => 914,
				'action_skill' => 'Summoning',
				'action_name' => 'War Tortoise',
				'action_level' => 67,
				'action_experience' => 59,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			914 =>
			array (
				'action_id' => 915,
				'action_skill' => 'Summoning',
				'action_name' => 'Bunyip',
				'action_level' => 68,
				'action_experience' => 119,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			915 =>
			array (
				'action_id' => 916,
				'action_skill' => 'Summoning',
				'action_name' => 'Fruit Bat',
				'action_level' => 69,
				'action_experience' => 121,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			916 =>
			array (
				'action_id' => 917,
				'action_skill' => 'Summoning',
				'action_name' => 'Ravenous Locust',
				'action_level' => 70,
				'action_experience' => 132,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			917 =>
			array (
				'action_id' => 918,
				'action_skill' => 'Summoning',
				'action_name' => 'Arctic Bear',
				'action_level' => 71,
				'action_experience' => 93,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			918 =>
			array (
				'action_id' => 919,
				'action_skill' => 'Summoning',
				'action_name' => 'Phoenix',
				'action_level' => 72,
				'action_experience' => 302,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			919 =>
			array (
				'action_id' => 920,
				'action_skill' => 'Summoning',
				'action_name' => 'Obsidian Golem',
				'action_level' => 73,
				'action_experience' => 642,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			920 =>
			array (
				'action_id' => 921,
				'action_skill' => 'Summoning',
				'action_name' => 'Granite Lobster',
				'action_level' => 74,
				'action_experience' => 326,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			921 =>
			array (
				'action_id' => 922,
				'action_skill' => 'Summoning',
				'action_name' => 'Praying Mantis',
				'action_level' => 75,
				'action_experience' => 330,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			922 =>
			array (
				'action_id' => 923,
				'action_skill' => 'Summoning',
				'action_name' => 'Adamant Minotaur',
				'action_level' => 76,
				'action_experience' => 669,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			923 =>
			array (
				'action_id' => 924,
				'action_skill' => 'Summoning',
				'action_name' => 'Forge Regent',
				'action_level' => 76,
				'action_experience' => 134,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			924 =>
			array (
				'action_id' => 925,
				'action_skill' => 'Summoning',
				'action_name' => 'Talon Beast',
				'action_level' => 77,
				'action_experience' => 1015,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			925 =>
			array (
				'action_id' => 926,
				'action_skill' => 'Summoning',
				'action_name' => 'Giant Ent',
				'action_level' => 78,
				'action_experience' => 137,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			926 =>
			array (
				'action_id' => 927,
				'action_skill' => 'Summoning',
				'action_name' => 'Fire Titan',
				'action_level' => 79,
				'action_experience' => 695,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			927 =>
			array (
				'action_id' => 928,
				'action_skill' => 'Summoning',
				'action_name' => 'Ice Titan',
				'action_level' => 79,
				'action_experience' => 695,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			928 =>
			array (
				'action_id' => 929,
				'action_skill' => 'Summoning',
				'action_name' => 'Moss Titan',
				'action_level' => 79,
				'action_experience' => 695,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			929 =>
			array (
				'action_id' => 930,
				'action_skill' => 'Summoning',
				'action_name' => 'Hydra',
				'action_level' => 80,
				'action_experience' => 141,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			930 =>
			array (
				'action_id' => 931,
				'action_skill' => 'Summoning',
				'action_name' => 'Spirit Dagannoth',
				'action_level' => 83,
				'action_experience' => 365,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			931 =>
			array (
				'action_id' => 932,
				'action_skill' => 'Summoning',
				'action_name' => 'Lava Titan',
				'action_level' => 83,
				'action_experience' => 730,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			932 =>
			array (
				'action_id' => 933,
				'action_skill' => 'Summoning',
				'action_name' => 'Swamp Titan',
				'action_level' => 85,
				'action_experience' => 374,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			933 =>
			array (
				'action_id' => 934,
				'action_skill' => 'Summoning',
				'action_name' => 'Rune Minatour',
				'action_level' => 86,
				'action_experience' => 757,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			934 =>
			array (
				'action_id' => 935,
				'action_skill' => 'Summoning',
				'action_name' => 'Unicorn Stallion',
				'action_level' => 88,
				'action_experience' => 154,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			935 =>
			array (
				'action_id' => 936,
				'action_skill' => 'Summoning',
				'action_name' => 'Geyser Titan',
				'action_level' => 89,
				'action_experience' => 783,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			936 =>
			array (
				'action_id' => 937,
				'action_skill' => 'Summoning',
				'action_name' => 'Wolpertinger',
				'action_level' => 92,
				'action_experience' => 405,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			937 =>
			array (
				'action_id' => 938,
				'action_skill' => 'Summoning',
				'action_name' => 'Abyssal Titan',
				'action_level' => 93,
				'action_experience' => 163,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			938 =>
			array (
				'action_id' => 939,
				'action_skill' => 'Summoning',
				'action_name' => 'Iron Titan',
				'action_level' => 95,
				'action_experience' => 418,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			939 =>
			array (
				'action_id' => 940,
				'action_skill' => 'Summoning',
				'action_name' => 'Pack Yak',
				'action_level' => 96,
				'action_experience' => 422,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			940 =>
			array (
				'action_id' => 941,
				'action_skill' => 'Summoning',
				'action_name' => 'Steel Titan',
				'action_level' => 99,
				'action_experience' => 435,
				'action_members' => 1,
				'action_category' => 'Pouch',
			),
			941 =>
			array (
				'action_id' => 942,
				'action_skill' => 'Thieving',
				'action_name' => 'Man',
				'action_level' => 1,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			942 =>
			array (
				'action_id' => 943,
				'action_skill' => 'Thieving',
				'action_name' => 'Woman',
				'action_level' => 1,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			943 =>
			array (
				'action_id' => 944,
				'action_skill' => 'Thieving',
				'action_name' => 'Winter Sq\'irk Juice',
				'action_level' => 1,
				'action_experience' => 350,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			944 =>
			array (
				'action_id' => 945,
				'action_skill' => 'Thieving',
				'action_name' => 'Vegetable Stall',
				'action_level' => 2,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			945 =>
			array (
				'action_id' => 946,
				'action_skill' => 'Thieving',
				'action_name' => 'Bakers Stall',
				'action_level' => 5,
				'action_experience' => 16,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			946 =>
			array (
				'action_id' => 947,
				'action_skill' => 'Thieving',
				'action_name' => 'General Stall',
				'action_level' => 5,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			947 =>
			array (
				'action_id' => 948,
				'action_skill' => 'Thieving',
				'action_name' => 'Tea Stall',
				'action_level' => 5,
				'action_experience' => 16,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			948 =>
			array (
				'action_id' => 949,
				'action_skill' => 'Thieving',
				'action_name' => 'Crafting Stall',
				'action_level' => 5,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			949 =>
			array (
				'action_id' => 950,
				'action_skill' => 'Thieving',
				'action_name' => 'Monkey Food Stall',
				'action_level' => 5,
				'action_experience' => 16,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			950 =>
			array (
				'action_id' => 951,
				'action_skill' => 'Thieving',
				'action_name' => 'Farmer',
				'action_level' => 10,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			951 =>
			array (
				'action_id' => 952,
				'action_skill' => 'Thieving',
				'action_name' => 'Small Coin Chest',
				'action_level' => 13,
				'action_experience' => 8,
				'action_members' => 1,
				'action_category' => 'Chest',
			),
			952 =>
			array (
				'action_id' => 953,
				'action_skill' => 'Thieving',
				'action_name' => 'Female H.A.M',
				'action_level' => 15,
				'action_experience' => 19,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			953 =>
			array (
				'action_id' => 954,
				'action_skill' => 'Thieving',
				'action_name' => 'Rock Cake Stall',
				'action_level' => 15,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			954 =>
			array (
				'action_id' => 955,
				'action_skill' => 'Thieving',
				'action_name' => 'Male H.A.M',
				'action_level' => 20,
				'action_experience' => 22,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			955 =>
			array (
				'action_id' => 956,
				'action_skill' => 'Thieving',
				'action_name' => 'Silk Stall',
				'action_level' => 20,
				'action_experience' => 24,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			956 =>
			array (
				'action_id' => 957,
				'action_skill' => 'Thieving',
				'action_name' => 'Zogre Coffins',
				'action_level' => 20,
				'action_experience' => 27,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			957 =>
			array (
				'action_id' => 958,
				'action_skill' => 'Thieving',
				'action_name' => 'Wine Stall',
				'action_level' => 22,
				'action_experience' => 27,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			958 =>
			array (
				'action_id' => 959,
				'action_skill' => 'Thieving',
				'action_name' => 'Warrior',
				'action_level' => 25,
				'action_experience' => 26,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			959 =>
			array (
				'action_id' => 960,
				'action_skill' => 'Thieving',
				'action_name' => 'Spring Sq\'irk Juice',
				'action_level' => 25,
				'action_experience' => 1350,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			960 =>
			array (
				'action_id' => 961,
				'action_skill' => 'Thieving',
				'action_name' => 'Seed Stall',
				'action_level' => 27,
				'action_experience' => 10,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			961 =>
			array (
				'action_id' => 962,
				'action_skill' => 'Thieving',
				'action_name' => 'Nature Rune Chest',
				'action_level' => 28,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Chest',
			),
			962 =>
			array (
				'action_id' => 963,
				'action_skill' => 'Thieving',
				'action_name' => 'Rogue',
				'action_level' => 32,
				'action_experience' => 37,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			963 =>
			array (
				'action_id' => 964,
				'action_skill' => 'Thieving',
				'action_name' => 'Fur Stall',
				'action_level' => 35,
				'action_experience' => 36,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			964 =>
			array (
				'action_id' => 965,
				'action_skill' => 'Thieving',
				'action_name' => 'Cave Goblin',
				'action_level' => 36,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			965 =>
			array (
				'action_id' => 966,
				'action_skill' => 'Thieving',
				'action_name' => 'Master Farmer',
				'action_level' => 38,
				'action_experience' => 43,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			966 =>
			array (
				'action_id' => 967,
				'action_skill' => 'Thieving',
				'action_name' => 'Guard',
				'action_level' => 40,
				'action_experience' => 47,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			967 =>
			array (
				'action_id' => 968,
				'action_skill' => 'Thieving',
				'action_name' => 'Fish Stall',
				'action_level' => 42,
				'action_experience' => 42,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			968 =>
			array (
				'action_id' => 969,
				'action_skill' => 'Thieving',
				'action_name' => 'East Ardougne Chest',
				'action_level' => 43,
				'action_experience' => 125,
				'action_members' => 1,
				'action_category' => 'Chest',
			),
			969 =>
			array (
				'action_id' => 970,
				'action_skill' => 'Thieving',
				'action_name' => 'Fremennik',
				'action_level' => 45,
				'action_experience' => 65,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			970 =>
			array (
				'action_id' => 971,
				'action_skill' => 'Thieving',
				'action_name' => 'Bearded Pollnivian Bandit',
				'action_level' => 45,
				'action_experience' => 65,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			971 =>
			array (
				'action_id' => 972,
				'action_skill' => 'Thieving',
				'action_name' => 'Autumn Sq\'irk Juice',
				'action_level' => 45,
				'action_experience' => 2350,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			972 =>
			array (
				'action_id' => 973,
				'action_skill' => 'Thieving',
				'action_name' => 'Hemenster Chest',
				'action_level' => 47,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Chest',
			),
			973 =>
			array (
				'action_id' => 974,
				'action_skill' => 'Thieving',
				'action_name' => 'Head Mourners Chest',
				'action_level' => 47,
				'action_experience' => 150,
				'action_members' => 1,
				'action_category' => 'Chest',
			),
			974 =>
			array (
				'action_id' => 975,
				'action_skill' => 'Thieving',
				'action_name' => 'Crossbow Stall',
				'action_level' => 49,
				'action_experience' => 52,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			975 =>
			array (
				'action_id' => 976,
				'action_skill' => 'Thieving',
				'action_name' => 'Silver Stall',
				'action_level' => 50,
				'action_experience' => 54,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			976 =>
			array (
				'action_id' => 977,
				'action_skill' => 'Thieving',
				'action_name' => 'Average Chest',
				'action_level' => 52,
				'action_experience' => 200,
				'action_members' => 1,
				'action_category' => 'Chest',
			),
			977 =>
			array (
				'action_id' => 978,
				'action_skill' => 'Thieving',
				'action_name' => 'Desert Bandit',
				'action_level' => 53,
				'action_experience' => 79,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			978 =>
			array (
				'action_id' => 979,
				'action_skill' => 'Thieving',
				'action_name' => 'Knight',
				'action_level' => 55,
				'action_experience' => 84,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			979 =>
			array (
				'action_id' => 980,
				'action_skill' => 'Thieving',
				'action_name' => 'Pollnivian Bandit',
				'action_level' => 55,
				'action_experience' => 84,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			980 =>
			array (
				'action_id' => 981,
				'action_skill' => 'Thieving',
				'action_name' => 'Chaos Druid\'s Chest',
				'action_level' => 59,
				'action_experience' => 250,
				'action_members' => 1,
				'action_category' => 'Chest',
			),
			981 =>
			array (
				'action_id' => 982,
				'action_skill' => 'Thieving',
				'action_name' => 'Rock Island Evidence Cabinets',
				'action_level' => 63,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Chest',
			),
			982 =>
			array (
				'action_id' => 983,
				'action_skill' => 'Thieving',
				'action_name' => 'Watchman',
				'action_level' => 65,
				'action_experience' => 138,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			983 =>
			array (
				'action_id' => 984,
				'action_skill' => 'Thieving',
				'action_name' => 'Menaphite Thug',
				'action_level' => 65,
				'action_experience' => 138,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			984 =>
			array (
				'action_id' => 985,
				'action_skill' => 'Thieving',
				'action_name' => 'Magic Stall',
				'action_level' => 65,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			985 =>
			array (
				'action_id' => 986,
				'action_skill' => 'Thieving',
				'action_name' => 'Scimitar Stall',
				'action_level' => 65,
				'action_experience' => 160,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			986 =>
			array (
				'action_id' => 987,
				'action_skill' => 'Thieving',
				'action_name' => 'Spice Stall',
				'action_level' => 65,
				'action_experience' => 81,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			987 =>
			array (
				'action_id' => 988,
				'action_skill' => 'Thieving',
				'action_name' => 'Summer Sq\'irk Juice',
				'action_level' => 65,
				'action_experience' => 3000,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			988 =>
			array (
				'action_id' => 989,
				'action_skill' => 'Thieving',
				'action_name' => 'Paladin',
				'action_level' => 70,
				'action_experience' => 152,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			989 =>
			array (
				'action_id' => 990,
				'action_skill' => 'Thieving',
				'action_name' => 'King Lathas Chest',
				'action_level' => 72,
				'action_experience' => 500,
				'action_members' => 1,
				'action_category' => 'Chest',
			),
			990 =>
			array (
				'action_id' => 991,
				'action_skill' => 'Thieving',
				'action_name' => 'Gnome',
				'action_level' => 75,
				'action_experience' => 198,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			991 =>
			array (
				'action_id' => 992,
				'action_skill' => 'Thieving',
				'action_name' => 'Gem Stall',
				'action_level' => 75,
				'action_experience' => 16,
				'action_members' => 1,
				'action_category' => 'Stall',
			),
			992 =>
			array (
				'action_id' => 993,
				'action_skill' => 'Thieving',
				'action_name' => 'Rich Chest',
				'action_level' => 78,
				'action_experience' => 650,
				'action_members' => 1,
				'action_category' => 'Chest',
			),
			993 =>
			array (
				'action_id' => 994,
				'action_skill' => 'Thieving',
				'action_name' => 'Hero',
				'action_level' => 80,
				'action_experience' => 273,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			994 =>
			array (
				'action_id' => 995,
				'action_skill' => 'Thieving',
				'action_name' => 'Elf',
				'action_level' => 85,
				'action_experience' => 353,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			995 =>
			array (
				'action_id' => 996,
				'action_skill' => 'Thieving',
				'action_name' => 'Dwarf Trader',
				'action_level' => 90,
				'action_experience' => 557,
				'action_members' => 1,
				'action_category' => 'NPC',
			),
			996 =>
			array (
				'action_id' => 997,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Tree',
				'action_level' => 1,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Tree',
			),
			997 =>
			array (
				'action_id' => 998,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Evergreen Tree',
				'action_level' => 1,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Tree',
			),
			998 =>
			array (
				'action_id' => 999,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Achey Tree',
				'action_level' => 1,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			999 =>
			array (
				'action_id' => 1000,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Dead Tree',
				'action_level' => 1,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Tree',
			),
			1000 =>
			array (
				'action_id' => 1001,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Light Jungle',
				'action_level' => 10,
				'action_experience' => 32,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			1001 =>
			array (
				'action_id' => 1002,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Oak Tree',
				'action_level' => 15,
				'action_experience' => 38,
				'action_members' => 0,
				'action_category' => 'Tree',
			),
			1002 =>
			array (
				'action_id' => 1003,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Medium Jungle',
				'action_level' => 20,
				'action_experience' => 55,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			1003 =>
			array (
				'action_id' => 1004,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Willow Tree',
				'action_level' => 30,
				'action_experience' => 68,
				'action_members' => 0,
				'action_category' => 'Tree',
			),
			1004 =>
			array (
				'action_id' => 1005,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Dense Jungle',
				'action_level' => 35,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			1005 =>
			array (
				'action_id' => 1006,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Teak Tree',
				'action_level' => 35,
				'action_experience' => 85,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			1006 =>
			array (
				'action_id' => 1007,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Maple Tree',
				'action_level' => 45,
				'action_experience' => 100,
				'action_members' => 0,
				'action_category' => 'Tree',
			),
			1007 =>
			array (
				'action_id' => 1008,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Hollow Tree',
				'action_level' => 45,
				'action_experience' => 83,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			1008 =>
			array (
				'action_id' => 1009,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Mahogany Tree',
				'action_level' => 50,
				'action_experience' => 125,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			1009 =>
			array (
				'action_id' => 1010,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Arctic Pine',
				'action_level' => 54,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			1010 =>
			array (
				'action_id' => 1011,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Eucalyptus',
				'action_level' => 58,
				'action_experience' => 165,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			1011 =>
			array (
				'action_id' => 1012,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Yew Tree',
				'action_level' => 60,
				'action_experience' => 175,
				'action_members' => 0,
				'action_category' => 'Tree',
			),
			1012 =>
			array (
				'action_id' => 1013,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Ivy',
				'action_level' => 68,
				'action_experience' => 333,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			1013 =>
			array (
				'action_id' => 1014,
				'action_skill' => 'Woodcutting',
				'action_name' => 'Magic Tree',
				'action_level' => 75,
				'action_experience' => 250,
				'action_members' => 1,
				'action_category' => 'Tree',
			),
			1014 =>
			array (
				'action_id' => 1015,
				'action_skill' => 'Prayer',
				'action_name' => 'Impious Ashes',
				'action_level' => 1,
				'action_experience' => 4,
				'action_members' => 0,
				'action_category' => 'Ashes',
			),
			1015 =>
			array (
				'action_id' => 1016,
				'action_skill' => 'Prayer',
				'action_name' => 'Bones',
				'action_level' => 1,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Bones',
			),
			1016 =>
			array (
				'action_id' => 1017,
				'action_skill' => 'Prayer',
				'action_name' => 'Wolf Bones',
				'action_level' => 1,
				'action_experience' => 5,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1017 =>
			array (
				'action_id' => 1018,
				'action_skill' => 'Prayer',
				'action_name' => 'Burnt Bones',
				'action_level' => 1,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Bones',
			),
			1018 =>
			array (
				'action_id' => 1019,
				'action_skill' => 'Prayer',
				'action_name' => 'Monkey Bones',
				'action_level' => 1,
				'action_experience' => 5,
				'action_members' => 0,
				'action_category' => 'Bones',
			),
			1019 =>
			array (
				'action_id' => 1020,
				'action_skill' => 'Prayer',
				'action_name' => 'Bat Bones',
				'action_level' => 1,
				'action_experience' => 5,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1020 =>
			array (
				'action_id' => 1021,
				'action_skill' => 'Prayer',
				'action_name' => 'Accursed Ashes',
				'action_level' => 1,
				'action_experience' => 13,
				'action_members' => 0,
				'action_category' => 'Ashes',
			),
			1021 =>
			array (
				'action_id' => 1022,
				'action_skill' => 'Prayer',
				'action_name' => 'Big Bones',
				'action_level' => 1,
				'action_experience' => 15,
				'action_members' => 0,
				'action_category' => 'Bones',
			),
			1022 =>
			array (
				'action_id' => 1023,
				'action_skill' => 'Prayer',
				'action_name' => 'Curved Bones',
				'action_level' => 1,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1023 =>
			array (
				'action_id' => 1024,
				'action_skill' => 'Prayer',
				'action_name' => 'Long Bones',
				'action_level' => 1,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1024 =>
			array (
				'action_id' => 1025,
				'action_skill' => 'Prayer',
				'action_name' => 'Jogre Bones',
				'action_level' => 1,
				'action_experience' => 15,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1025 =>
			array (
				'action_id' => 1026,
				'action_skill' => 'Prayer',
				'action_name' => 'Zogre Bones',
				'action_level' => 1,
				'action_experience' => 23,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1026 =>
			array (
				'action_id' => 1027,
				'action_skill' => 'Prayer',
				'action_name' => 'Shaikahan Bones',
				'action_level' => 1,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1027 =>
			array (
				'action_id' => 1028,
				'action_skill' => 'Prayer',
				'action_name' => 'Baby Dragon Bones',
				'action_level' => 1,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1028 =>
			array (
				'action_id' => 1029,
				'action_skill' => 'Prayer',
				'action_name' => 'Wyvern Bones',
				'action_level' => 1,
				'action_experience' => 50,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1029 =>
			array (
				'action_id' => 1030,
				'action_skill' => 'Prayer',
				'action_name' => 'Infernal Ashes',
				'action_level' => 1,
				'action_experience' => 63,
				'action_members' => 1,
				'action_category' => 'Ashes',
			),
			1030 =>
			array (
				'action_id' => 1031,
				'action_skill' => 'Prayer',
				'action_name' => 'Dragon Bones',
				'action_level' => 1,
				'action_experience' => 72,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1031 =>
			array (
				'action_id' => 1032,
				'action_skill' => 'Prayer',
				'action_name' => 'Fayrg Bones',
				'action_level' => 1,
				'action_experience' => 84,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1032 =>
			array (
				'action_id' => 1033,
				'action_skill' => 'Prayer',
				'action_name' => 'Raurg Bones',
				'action_level' => 1,
				'action_experience' => 96,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1033 =>
			array (
				'action_id' => 1034,
				'action_skill' => 'Prayer',
				'action_name' => 'Dagannoth Bones',
				'action_level' => 1,
				'action_experience' => 125,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1034 =>
			array (
				'action_id' => 1035,
				'action_skill' => 'Prayer',
				'action_name' => 'Ourg Bones',
				'action_level' => 1,
				'action_experience' => 140,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1035 =>
			array (
				'action_id' => 1036,
				'action_skill' => 'Prayer',
				'action_name' => 'Frost Dragon Bones',
				'action_level' => 1,
				'action_experience' => 180,
				'action_members' => 1,
				'action_category' => 'Bones',
			),
			1036 =>
			array (
				'action_id' => 1037,
				'action_skill' => 'Magic',
				'action_name' => 'Wind Strike (20)',
				'action_level' => 1,
				'action_experience' => 6,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1037 =>
			array (
				'action_id' => 1038,
				'action_skill' => 'Magic',
				'action_name' => 'Confuse',
				'action_level' => 3,
				'action_experience' => 13,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1038 =>
			array (
				'action_id' => 1039,
				'action_skill' => 'Magic',
				'action_name' => 'Water Strike (40)',
				'action_level' => 5,
				'action_experience' => 8,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1039 =>
			array (
				'action_id' => 1040,
				'action_skill' => 'Magic',
				'action_name' => 'Enchant Level 1 Jewellery',
				'action_level' => 7,
				'action_experience' => 18,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1040 =>
			array (
				'action_id' => 1041,
				'action_skill' => 'Magic',
				'action_name' => 'Earth Strike (60)',
				'action_level' => 9,
				'action_experience' => 10,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1041 =>
			array (
				'action_id' => 1042,
				'action_skill' => 'Magic',
				'action_name' => 'Mobilising Armies Teleport',
				'action_level' => 10,
				'action_experience' => 19,
				'action_members' => 1,
				'action_category' => 'Teleport',
			),
			1042 =>
			array (
				'action_id' => 1043,
				'action_skill' => 'Magic',
				'action_name' => 'Weaken',
				'action_level' => 11,
				'action_experience' => 21,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1043 =>
			array (
				'action_id' => 1044,
				'action_skill' => 'Magic',
				'action_name' => 'Fire Strike (80)',
				'action_level' => 13,
				'action_experience' => 12,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1044 =>
			array (
				'action_id' => 1045,
				'action_skill' => 'Magic',
				'action_name' => 'Bones to Bananas',
				'action_level' => 15,
				'action_experience' => 25,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1045 =>
			array (
				'action_id' => 1046,
				'action_skill' => 'Magic',
				'action_name' => 'Wind Bolt (90)',
				'action_level' => 17,
				'action_experience' => 14,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1046 =>
			array (
				'action_id' => 1047,
				'action_skill' => 'Magic',
				'action_name' => 'Curse',
				'action_level' => 19,
				'action_experience' => 29,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1047 =>
			array (
				'action_id' => 1048,
				'action_skill' => 'Magic',
				'action_name' => 'Bind',
				'action_level' => 20,
				'action_experience' => 30,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1048 =>
			array (
				'action_id' => 1049,
				'action_skill' => 'Magic',
				'action_name' => 'Low Level Alchemy',
				'action_level' => 21,
				'action_experience' => 31,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1049 =>
			array (
				'action_id' => 1050,
				'action_skill' => 'Magic',
				'action_name' => 'Water Bolt (100)',
				'action_level' => 23,
				'action_experience' => 17,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1050 =>
			array (
				'action_id' => 1051,
				'action_skill' => 'Magic',
				'action_name' => 'Varrock Teleport',
				'action_level' => 25,
				'action_experience' => 35,
				'action_members' => 0,
				'action_category' => 'Teleport',
			),
			1051 =>
			array (
				'action_id' => 1052,
				'action_skill' => 'Magic',
				'action_name' => 'Enchant Level 2 Jewellery',
				'action_level' => 27,
				'action_experience' => 37,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1052 =>
			array (
				'action_id' => 1053,
				'action_skill' => 'Magic',
				'action_name' => 'Earth Bolt (110)',
				'action_level' => 29,
				'action_experience' => 20,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1053 =>
			array (
				'action_id' => 1054,
				'action_skill' => 'Magic',
				'action_name' => 'Lumbridge Teleport',
				'action_level' => 31,
				'action_experience' => 41,
				'action_members' => 0,
				'action_category' => 'Teleport',
			),
			1054 =>
			array (
				'action_id' => 1055,
				'action_skill' => 'Magic',
				'action_name' => 'Telekinetic Grab',
				'action_level' => 33,
				'action_experience' => 43,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1055 =>
			array (
				'action_id' => 1056,
				'action_skill' => 'Magic',
				'action_name' => 'Fire Bolt (120)',
				'action_level' => 35,
				'action_experience' => 22,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1056 =>
			array (
				'action_id' => 1057,
				'action_skill' => 'Magic',
				'action_name' => 'Falador Teleport',
				'action_level' => 37,
				'action_experience' => 48,
				'action_members' => 0,
				'action_category' => 'Teleport',
			),
			1057 =>
			array (
				'action_id' => 1058,
				'action_skill' => 'Magic',
				'action_name' => 'Crumble Undead (150)',
				'action_level' => 39,
				'action_experience' => 25,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1058 =>
			array (
				'action_id' => 1059,
				'action_skill' => 'Magic',
				'action_name' => 'House Teleport',
				'action_level' => 40,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Teleport',
			),
			1059 =>
			array (
				'action_id' => 1060,
				'action_skill' => 'Magic',
				'action_name' => 'Wind Blast (130)',
				'action_level' => 41,
				'action_experience' => 26,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1060 =>
			array (
				'action_id' => 1061,
				'action_skill' => 'Magic',
				'action_name' => 'Superheat Item',
				'action_level' => 43,
				'action_experience' => 53,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1061 =>
			array (
				'action_id' => 1062,
				'action_skill' => 'Magic',
				'action_name' => 'Camelot Teleport',
				'action_level' => 45,
				'action_experience' => 56,
				'action_members' => 1,
				'action_category' => 'Teleport',
			),
			1062 =>
			array (
				'action_id' => 1063,
				'action_skill' => 'Magic',
				'action_name' => 'Water Blast (140)',
				'action_level' => 47,
				'action_experience' => 29,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1063 =>
			array (
				'action_id' => 1064,
				'action_skill' => 'Magic',
				'action_name' => 'Enchant Level 3 Jewellery',
				'action_level' => 49,
				'action_experience' => 59,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1064 =>
			array (
				'action_id' => 1065,
				'action_skill' => 'Magic',
				'action_name' => 'Iban Blast (250)',
				'action_level' => 50,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1065 =>
			array (
				'action_id' => 1066,
				'action_skill' => 'Magic',
				'action_name' => 'Snare',
				'action_level' => 50,
				'action_experience' => 61,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1066 =>
			array (
				'action_id' => 1067,
				'action_skill' => 'Magic',
				'action_name' => 'Magic Dart (190)',
				'action_level' => 50,
				'action_experience' => 30,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1067 =>
			array (
				'action_id' => 1068,
				'action_skill' => 'Magic',
				'action_name' => 'Ardougne Teleport',
				'action_level' => 51,
				'action_experience' => 61,
				'action_members' => 1,
				'action_category' => 'Teleport',
			),
			1068 =>
			array (
				'action_id' => 1069,
				'action_skill' => 'Magic',
				'action_name' => 'Earth Blast (150)',
				'action_level' => 53,
				'action_experience' => 32,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1069 =>
			array (
				'action_id' => 1070,
				'action_skill' => 'Magic',
				'action_name' => 'High Level Alchemy',
				'action_level' => 55,
				'action_experience' => 65,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1070 =>
			array (
				'action_id' => 1071,
				'action_skill' => 'Magic',
				'action_name' => 'Charge Water Orb',
				'action_level' => 56,
				'action_experience' => 56,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1071 =>
			array (
				'action_id' => 1072,
				'action_skill' => 'Magic',
				'action_name' => 'Enchant Level 4 Jewellery',
				'action_level' => 57,
				'action_experience' => 67,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1072 =>
			array (
				'action_id' => 1073,
				'action_skill' => 'Magic',
				'action_name' => 'Watchtower Teleport',
				'action_level' => 58,
				'action_experience' => 68,
				'action_members' => 1,
				'action_category' => 'Teleport',
			),
			1073 =>
			array (
				'action_id' => 1074,
				'action_skill' => 'Magic',
				'action_name' => 'Fire Blast (160)',
				'action_level' => 59,
				'action_experience' => 35,
				'action_members' => 0,
				'action_category' => 'Spell',
			),
			1074 =>
			array (
				'action_id' => 1075,
				'action_skill' => 'Magic',
				'action_name' => 'Bones to Peaches',
				'action_level' => 60,
				'action_experience' => 36,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1075 =>
			array (
				'action_id' => 1076,
				'action_skill' => 'Magic',
				'action_name' => 'Saradomin Strike (200)',
				'action_level' => 60,
				'action_experience' => 61,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1076 =>
			array (
				'action_id' => 1077,
				'action_skill' => 'Magic',
				'action_name' => 'Claws of Guthix (200)',
				'action_level' => 60,
				'action_experience' => 61,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1077 =>
			array (
				'action_id' => 1078,
				'action_skill' => 'Magic',
				'action_name' => 'Flames of Zamorak (200)',
				'action_level' => 60,
				'action_experience' => 61,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1078 =>
			array (
				'action_id' => 1079,
				'action_skill' => 'Magic',
				'action_name' => 'Charge Earth Orb',
				'action_level' => 60,
				'action_experience' => 70,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1079 =>
			array (
				'action_id' => 1080,
				'action_skill' => 'Magic',
				'action_name' => 'Trollheim Teleport',
				'action_level' => 61,
				'action_experience' => 68,
				'action_members' => 1,
				'action_category' => 'Teleport',
			),
			1080 =>
			array (
				'action_id' => 1081,
				'action_skill' => 'Magic',
				'action_name' => 'Wind Wave (170)',
				'action_level' => 62,
				'action_experience' => 36,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1081 =>
			array (
				'action_id' => 1082,
				'action_skill' => 'Magic',
				'action_name' => 'Charge Fire Orb',
				'action_level' => 63,
				'action_experience' => 73,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1082 =>
			array (
				'action_id' => 1083,
				'action_skill' => 'Magic',
				'action_name' => 'Ape Atoll Teleport',
				'action_level' => 64,
				'action_experience' => 74,
				'action_members' => 1,
				'action_category' => 'Teleport',
			),
			1083 =>
			array (
				'action_id' => 1084,
				'action_skill' => 'Magic',
				'action_name' => 'Water Wave (180)',
				'action_level' => 65,
				'action_experience' => 38,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1084 =>
			array (
				'action_id' => 1085,
				'action_skill' => 'Magic',
				'action_name' => 'Charge Air Orb',
				'action_level' => 66,
				'action_experience' => 76,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1085 =>
			array (
				'action_id' => 1086,
				'action_skill' => 'Magic',
				'action_name' => 'Vulnerability',
				'action_level' => 66,
				'action_experience' => 76,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1086 =>
			array (
				'action_id' => 1087,
				'action_skill' => 'Magic',
				'action_name' => 'Enchant Level 5 Jewellery',
				'action_level' => 68,
				'action_experience' => 78,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1087 =>
			array (
				'action_id' => 1088,
				'action_skill' => 'Magic',
				'action_name' => 'Earth Wave (190)',
				'action_level' => 70,
				'action_experience' => 40,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1088 =>
			array (
				'action_id' => 1089,
				'action_skill' => 'Magic',
				'action_name' => 'Enfeeble',
				'action_level' => 73,
				'action_experience' => 83,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1089 =>
			array (
				'action_id' => 1090,
				'action_skill' => 'Magic',
				'action_name' => 'Teleother Lumbridge',
				'action_level' => 74,
				'action_experience' => 84,
				'action_members' => 1,
				'action_category' => 'Teleport',
			),
			1090 =>
			array (
				'action_id' => 1091,
				'action_skill' => 'Magic',
				'action_name' => 'Fire Wave (200)',
				'action_level' => 75,
				'action_experience' => 43,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1091 =>
			array (
				'action_id' => 1092,
				'action_skill' => 'Magic',
				'action_name' => 'Entangle',
				'action_level' => 79,
				'action_experience' => 91,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1092 =>
			array (
				'action_id' => 1093,
				'action_skill' => 'Magic',
				'action_name' => 'Stun',
				'action_level' => 80,
				'action_experience' => 90,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1093 =>
			array (
				'action_id' => 1094,
				'action_skill' => 'Magic',
				'action_name' => 'Charge',
				'action_level' => 80,
				'action_experience' => 180,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1094 =>
			array (
				'action_id' => 1095,
				'action_skill' => 'Magic',
				'action_name' => 'Wind Surge (220)',
				'action_level' => 81,
				'action_experience' => 75,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1095 =>
			array (
				'action_id' => 1096,
				'action_skill' => 'Magic',
				'action_name' => 'Teleother Falador',
				'action_level' => 82,
				'action_experience' => 92,
				'action_members' => 1,
				'action_category' => 'Teleport',
			),
			1096 =>
			array (
				'action_id' => 1097,
				'action_skill' => 'Magic',
				'action_name' => 'Teleport Block',
				'action_level' => 85,
				'action_experience' => 80,
				'action_members' => 0,
				'action_category' => 'Teleport',
			),
			1097 =>
			array (
				'action_id' => 1098,
				'action_skill' => 'Magic',
				'action_name' => 'Water Surge (240)',
				'action_level' => 85,
				'action_experience' => 80,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1098 =>
			array (
				'action_id' => 1099,
				'action_skill' => 'Magic',
				'action_name' => 'Enchant Level 6 Jewellery',
				'action_level' => 87,
				'action_experience' => 85,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1099 =>
			array (
				'action_id' => 1100,
				'action_skill' => 'Magic',
				'action_name' => 'Earth Surge (260)',
				'action_level' => 90,
				'action_experience' => 85,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
			1100 =>
			array (
				'action_id' => 1101,
				'action_skill' => 'Magic',
				'action_name' => 'Teleother Camelot',
				'action_level' => 90,
				'action_experience' => 100,
				'action_members' => 1,
				'action_category' => 'Teleport',
			),
			1101 =>
			array (
				'action_id' => 1102,
				'action_skill' => 'Magic',
				'action_name' => 'Fire Surge (280)',
				'action_level' => 95,
				'action_experience' => 90,
				'action_members' => 1,
				'action_category' => 'Spell',
			),
		));
	}

}
