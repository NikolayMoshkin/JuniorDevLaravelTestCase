<?php

use Illuminate\Database\Seeder;

class ProposalTypeRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proposalRole = new \App\ProposalTypeRole();
        $proposalRole->proposal_type = 1;
        $proposalRole->role_id = 2;
        $proposalRole->timestamps = false;
        $proposalRole->save();

        $proposalRole = new \App\ProposalTypeRole();
        $proposalRole->proposal_type = 2;
        $proposalRole->role_id = 3;
        $proposalRole->timestamps = false;
        $proposalRole->save();

    }
}
