# Developer Guide

---

## Project Rules

Never bypass architecture.

Always follow module order.

Never create shortcuts.

Enterprise quality only.

---

## Folder Structure

Controllers

Only HTTP layer.

No business logic.

---

Services

Business Logic

---

Repositories

Database Access

---

Models

Relationships

Scopes

Casting

No business logic.

---

Resources

API Response Formatting

---

Requests

Validation

Authorization

---

Traits

Reusable logic only.

---

Helpers

Small global helpers only.

---

Events

Business events.

---

Listeners

Reaction to events.

---

Jobs

Queue.

---

Policies

Authorization.

---

Middleware

Authentication

Tenant

Permissions

---

## Coding Rules

Controllers must stay thin.

Service handles logic.

Repository handles DB.

Resources return JSON.

Requests validate.

---

## Authentication Flow

Super Admin

↓

Login

↓

Sanctum Token

↓

Dashboard

---

Client

↓

Login

↓

Resolve Tenant

↓

Sanctum Token

↓

Dashboard

---

## Tenant Flow

Request

↓

Resolve Tenant

↓

CurrentTenant

↓

Global Helper

↓

tenant()

↓

Services

↓

Repository

↓

Database

---

## Future Upgrade

Subdomain

Dedicated Database

Multiple Regions

Multi Currency

White Label

Marketplace

API Gateway

Microservices

These folders already support future migration.

---

## Development Checklist

Always

Migration

↓

Model

↓

Relationship

↓

Repository

↓

Service

↓

Request

↓

Resource

↓

Controller

↓

Route

↓

Policy

↓

Permission

↓

Postman Test

↓

Frontend Integration

Never skip.
