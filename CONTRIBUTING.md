# Guía de Contribución - Sistema de Administración de Farmacia

## 🔀 Gitflow - Flujo de Trabajo

Este proyecto utiliza **Gitflow** para organizar el desarrollo. Sigue estas reglas estrictamente.

### Ramas Principales

#### `main`
- **Propósito**: Código en producción
- **Protección**: Solo se actualiza mediante merge desde `develop` o `hotfix/*`
- **Regla**: Nunca commits directos

#### `develop`
- **Propósito**: Código en desarrollo activo
- **Origen**: Se crea desde `main` al inicio del proyecto
- **Uso**: Rama base para todas las nuevas funcionalidades

### Ramas de Soporte

#### `feature/*`
- **Propósito**: Desarrollo de nuevas funcionalidades
- **Creación**: Desde `develop`
- **Nomenclatura**: `feature/nombre-funcionalidad` (ej: `feature/login`, `feature/inventario`)
- **Merge**: De vuelta a `develop` cuando esté completa
- **Eliminación**: Se elimina después del merge

**Ejemplo:**
```bash
git checkout develop
git pull origin develop
git checkout -b feature/login
# ... trabajar en la funcionalidad ...
git checkout develop
git merge feature/login
git branch -d feature/login
```

#### `bugfix/*`
- **Propósito**: Corrección de bugs en desarrollo
- **Creación**: Desde `develop`
- **Nomenclatura**: `bugfix/descripcion-bug` (ej: `bugfix/error-calculo-precio`)
- **Merge**: De vuelta a `develop`

#### `hotfix/*`
- **Propósito**: Correcciones urgentes en producción
- **Creación**: Desde `main`
- **Nomenclatura**: `hotfix/descripcion-urgente` (ej: `hotfix/vulnerabilidad-seguridad`)
- **Merge**: Tanto a `main` como a `develop`
- **Uso**: Solo para situaciones críticas

**Ejemplo:**
```bash
git checkout main
git pull origin main
git checkout -b hotfix/correccion-critica
# ... corregir el problema ...
git checkout main
git merge hotfix/correccion-critica
git checkout develop
git merge hotfix/correccion-critica
git branch -d hotfix/correccion-critica
```

## 📝 Reglas de Commits

### Formato de Mensajes

Usa el formato **Conventional Commits**:

```
<tipo>(<ámbito>): <descripción corta>

[descripción opcional más detallada]

[referencias a issues, ej: Closes #123]
```

### Tipos de Commit

- `feat`: Nueva funcionalidad
- `fix`: Corrección de bug
- `docs`: Cambios en documentación
- `style`: Cambios de formato (espacios, comas, etc.)
- `refactor`: Refactorización de código
- `test`: Agregar o modificar tests
- `chore`: Tareas de mantenimiento (build, dependencias, etc.)
- `perf`: Mejoras de rendimiento
- `ci`: Cambios en CI/CD

### Ámbitos (Opcional)

- `auth`: Autenticación
- `inventario`: Gestión de inventario
- `ventas`: Módulo de ventas
- `clientes`: Gestión de clientes
- `ui`: Interfaz de usuario
- `api`: API backend

### Ejemplos de Commits

✅ **Buenos ejemplos:**
```
feat(auth): agregar login con JWT
fix(inventario): corregir cálculo de stock disponible
docs(readme): actualizar instrucciones de instalación
refactor(api): simplificar endpoint de productos
test(ventas): agregar tests para módulo de ventas
```

❌ **Malos ejemplos:**
```
cambios
fix bug
actualizar
WIP
```

### Reglas Adicionales

1. **Un commit = un cambio lógico**: No mezcles múltiples cambios no relacionados
2. **Mensajes en español**: Todos los commits deben estar en español
3. **Mensajes descriptivos**: Explica QUÉ y POR QUÉ, no solo QUÉ
4. **Commits frecuentes**: Haz commits pequeños y frecuentes, no uno grande al final

## 🔄 Proceso de Trabajo

### 1. Antes de Empezar

```bash
# Actualizar develop
git checkout develop
git pull origin develop
```

### 2. Crear Rama de Feature

```bash
git checkout -b feature/mi-funcionalidad
```

### 3. Trabajar y Hacer Commits

```bash
# Hacer cambios
git add .
git commit -m "feat(ámbito): descripción del cambio"
```

### 4. Sincronizar con Develop

```bash
# Actualizar tu rama con los últimos cambios
git checkout develop
git pull origin develop
git checkout feature/mi-funcionalidad
git merge develop
```

### 5. Push y Crear Pull Request

```bash
git push origin feature/mi-funcionalidad
```

Luego crear un Pull Request en GitHub/GitLab desde `feature/mi-funcionalidad` hacia `develop`.

### 6. Después del Merge

```bash
# Limpiar rama local
git checkout develop
git pull origin develop
git branch -d feature/mi-funcionalidad
```

## ✅ Checklist Antes de Hacer Merge

- [ ] Código funciona correctamente
- [ ] No hay errores de linter
- [ ] Commits siguen el formato correcto
- [ ] La rama está actualizada con `develop`
- [ ] Se han probado los cambios localmente
- [ ] Documentación actualizada si es necesario

## 🚫 Prohibiciones

- ❌ Commits directos a `main` o `develop`
- ❌ Commits con mensajes genéricos ("cambios", "fix", etc.)
- ❌ Merge sin revisión (excepto en casos excepcionales)
- ❌ Ramas sin nombre descriptivo
- ❌ Commits que rompen el build

## 📞 Contacto

Si tienes dudas sobre el flujo de trabajo, contacta al equipo de desarrollo.

