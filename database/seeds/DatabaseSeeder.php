<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentsTableSeeder::class);
        $this->call(YearLevelSeeder::class);
        $this->call(SectionTableSeeder::class);
        // $this->call(SubjectTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(ClassTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(PrincipalTableSeeder::class);
        $this->call(GradeSevenSubjectTableSeeder::class);
        $this->call(GradeEightSubjectTableSeeder::class);
        $this->call(GradeNineSubjectTableSeeder::class);
        $this->call(GradeTenSubjectTableSeeder::class);
        $this->call(GradeElevenSubjectTableSeeder::class);
        $this->call(GradeTwelveSubjectTableSeeder::class);
        // $this->call(GradesTableSeeder::class);
        // $this->call(FirstGradingSeeder::class);
    }
}
