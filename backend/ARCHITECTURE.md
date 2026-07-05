# My HR Lounge (HRM)

Enterprise HRM SaaS Platform

---

# Architecture Status

Status : LOCKED

Architecture Version : v1.0

Locked By : Project Owner

Date : 2026

---

# Multi-Tenant Strategy

Current Version

✔ Single Domain

✔ Single Database

✔ Shared Tables

✔ tenant_id Isolation

✔ Future-ready for Subdomain

✔ Future-ready for Separate Database

Currently every company shares the same database.

Every business data is isolated using tenant_id.

Future upgrade will support

- tenant.company.com
- company.com
- Dedicated Database
- Database Switching

without breaking existing code.

---

# Authentication

Two completely separated login systems

Super Admin

/login

Client HR

/client/login

Backend routes are also separated.

Super Admin never mixes with Client APIs.

---

# User Types

Super Admin

Platform Owner

Client HR Admin

HR Manager

Department Manager

Employee

Future

Vendor

Recruiter

Candidate

Auditor

---

# Core Principles

SOLID

Repository Pattern

Service Layer

Action Classes

DTO

API Resource

Form Request Validation

Event Driven

Queue Ready

Cache Ready

Audit Ready

Tenant Ready

---

# Tenant Isolation

Every business table contains

tenant_id

Every query automatically filters

tenant_id

No company can access another company's data.

---

# Database Strategy

Current

Single MySQL Database

Future

Subdomain

Separate Database

Hybrid Mode

---

# Modules

Phase 1

23 Modules

Launch Ready

Phase 2

18 Modules

Advanced Enterprise

---

# Development Order

Step 1

Multi Tenant Infrastructure

Step 2

Authentication

Step 3

Dynamic RBAC

Step 4

Org Structure

Step 5

Employee Master

Continue until Launch.

Never skip dependency order.

---

# Coding Standards

PSR-12

Laravel Best Practices

Type Hinting

Return Types

Strict Validation

API First

No business logic inside Controllers.
