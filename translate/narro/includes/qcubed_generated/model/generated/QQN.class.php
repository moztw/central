<?php
	class QQN {
		/**
		 * @return QQNodeNarroContext
		 */
		static public function NarroContext() {
			return new QQNodeNarroContext('narro_context', null, null);
		}
		/**
		 * @return QQNodeNarroContextInfo
		 */
		static public function NarroContextInfo() {
			return new QQNodeNarroContextInfo('narro_context_info', null, null);
		}
		/**
		 * @return QQNodeNarroFile
		 */
		static public function NarroFile() {
			return new QQNodeNarroFile('narro_file', null, null);
		}
		/**
		 * @return QQNodeNarroFileProgress
		 */
		static public function NarroFileProgress() {
			return new QQNodeNarroFileProgress('narro_file_progress', null, null);
		}
		/**
		 * @return QQNodeNarroLanguage
		 */
		static public function NarroLanguage() {
			return new QQNodeNarroLanguage('narro_language', null, null);
		}
		/**
		 * @return QQNodeNarroLog
		 */
		static public function NarroLog() {
			return new QQNodeNarroLog('narro_log', null, null);
		}
		/**
		 * @return QQNodeNarroPermission
		 */
		static public function NarroPermission() {
			return new QQNodeNarroPermission('narro_permission', null, null);
		}
		/**
		 * @return QQNodeNarroProject
		 */
		static public function NarroProject() {
			return new QQNodeNarroProject('narro_project', null, null);
		}
		/**
		 * @return QQNodeNarroProjectCategory
		 */
		static public function NarroProjectCategory() {
			return new QQNodeNarroProjectCategory('narro_project_category', null, null);
		}
		/**
		 * @return QQNodeNarroProjectProgress
		 */
		static public function NarroProjectProgress() {
			return new QQNodeNarroProjectProgress('narro_project_progress', null, null);
		}
		/**
		 * @return QQNodeNarroRole
		 */
		static public function NarroRole() {
			return new QQNodeNarroRole('narro_role', null, null);
		}
		/**
		 * @return QQNodeNarroRolePermission
		 */
		static public function NarroRolePermission() {
			return new QQNodeNarroRolePermission('narro_role_permission', null, null);
		}
		/**
		 * @return QQNodeNarroSuggestion
		 */
		static public function NarroSuggestion() {
			return new QQNodeNarroSuggestion('narro_suggestion', null, null);
		}
		/**
		 * @return QQNodeNarroSuggestionVote
		 */
		static public function NarroSuggestionVote() {
			return new QQNodeNarroSuggestionVote('narro_suggestion_vote', null, null);
		}
		/**
		 * @return QQNodeNarroText
		 */
		static public function NarroText() {
			return new QQNodeNarroText('narro_text', null, null);
		}
		/**
		 * @return QQNodeNarroTextComment
		 */
		static public function NarroTextComment() {
			return new QQNodeNarroTextComment('narro_text_comment', null, null);
		}
		/**
		 * @return QQNodeNarroUser
		 */
		static public function NarroUser() {
			return new QQNodeNarroUser('narro_user', null, null);
		}
		/**
		 * @return QQNodeNarroUserRole
		 */
		static public function NarroUserRole() {
			return new QQNodeNarroUserRole('narro_user_role', null, null);
		}
	}
?>