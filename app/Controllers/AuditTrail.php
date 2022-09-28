<?php

namespace App\Controllers;

class AuditTrail extends BaseController
{
    public function index()
    {
        $senaraiJejakAudit = $this->auditTrailModel->getAll();

        return view('audit_trails/index', compact('senaraiJejakAudit'));
    }
}
